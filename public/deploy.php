<?php

/**
 * Deploy webhook — atualiza o código no servidor via `git pull`.
 *
 * Fluxo:
 *   GitHub (push) --webhook--> https://SEU_DOMINIO/deploy.php
 *   Este script valida a assinatura HMAC (X-Hub-Signature-256), confirma que
 *   o push foi na branch de deploy e roda `git pull` na raiz do projeto.
 *
 * Configuração (no .env do projeto, na raiz do Laravel):
 *   DEPLOY_WEBHOOK_SECRET=uma-string-secreta-forte
 *   DEPLOY_BRANCH=main            # opcional, default main
 *   DEPLOY_GIT_BIN=git            # opcional, caminho do git se não estiver no PATH
 *
 * No GitHub: Settings > Webhooks > Add webhook
 *   Payload URL:  https://SEU_DOMINIO/deploy.php
 *   Content type: application/json
 *   Secret:       o mesmo valor de DEPLOY_WEBHOOK_SECRET
 *   Events:       Just the push event
 *
 * Segurança: sem a assinatura HMAC correta o script recusa (401). Nunca
 * exponha DEPLOY_WEBHOOK_SECRET. Se preferir, renomeie este arquivo para algo
 * não óbvio e aponte o webhook para o novo nome.
 */

// A raiz do Laravel é o diretório pai de /public.
define('PROJECT_ROOT', dirname(__DIR__));
define('DEPLOY_LOG', PROJECT_ROOT . '/storage/logs/deploy.log');

header('Content-Type: application/json; charset=utf-8');

/**
 * Registra uma linha no log de deploy e (opcionalmente) encerra com um status.
 */
function deploy_log(string $message): void
{
    $line = '[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL;
    @file_put_contents(DEPLOY_LOG, $line, FILE_APPEND | LOCK_EX);
}

/**
 * Responde em JSON e encerra a execução.
 */
function respond(int $status, string $result, string $message, array $extra = []): void
{
    http_response_code($status);
    echo json_encode(array_merge([
        'result'  => $result,
        'message' => $message,
    ], $extra), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

/**
 * Lê uma variável do .env do projeto (o script roda fora do Laravel).
 * Preferimos o ambiente real; caímos para o parse do .env quando ausente.
 */
function env_value(string $key, ?string $default = null): ?string
{
    $fromEnv = getenv($key);
    if ($fromEnv !== false && $fromEnv !== '') {
        return $fromEnv;
    }

    static $parsed = null;
    if ($parsed === null) {
        $parsed = [];
        $envFile = PROJECT_ROOT . '/.env';
        if (is_readable($envFile)) {
            foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $rawLine) {
                $line = trim($rawLine);
                if ($line === '' || $line[0] === '#' || strpos($line, '=') === false) {
                    continue;
                }
                [$k, $v] = explode('=', $line, 2);
                $v = trim($v);
                // Remove aspas envolventes.
                if (strlen($v) >= 2 && ($v[0] === '"' || $v[0] === "'") && substr($v, -1) === $v[0]) {
                    $v = substr($v, 1, -1);
                }
                $parsed[trim($k)] = $v;
            }
        }
    }

    return $parsed[$key] ?? $default;
}

// ---------------------------------------------------------------------------

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, 'error', 'Método não permitido. Use POST.');
}

$secret = env_value('DEPLOY_WEBHOOK_SECRET');
if (!$secret) {
    deploy_log('ABORT: DEPLOY_WEBHOOK_SECRET não configurado no .env');
    respond(500, 'error', 'Deploy não configurado no servidor.');
}

$payload   = file_get_contents('php://input') ?: '';
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

if ($signature === '') {
    deploy_log('DENY: requisição sem assinatura (X-Hub-Signature-256)');
    respond(401, 'error', 'Assinatura ausente.');
}

$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
if (!hash_equals($expected, $signature)) {
    deploy_log('DENY: assinatura inválida');
    respond(401, 'error', 'Assinatura inválida.');
}

// Só reagimos a push. Ping (setup do webhook) responde OK sem fazer pull.
$event = $_SERVER['HTTP_X_GITHUB_EVENT'] ?? '';
if ($event === 'ping') {
    deploy_log('PING recebido — webhook configurado com sucesso');
    respond(200, 'ok', 'pong');
}
if ($event !== 'push') {
    respond(202, 'ignored', "Evento '{$event}' ignorado.");
}

$data       = json_decode($payload, true) ?: [];
$ref        = $data['ref'] ?? '';
$branch     = env_value('DEPLOY_BRANCH', 'main');
$expectedRef = 'refs/heads/' . $branch;

if ($ref !== $expectedRef) {
    deploy_log("SKIP: push em '{$ref}', esperado '{$expectedRef}'");
    respond(202, 'ignored', "Push em '{$ref}' ignorado (deploy só na '{$branch}').");
}

// --- Executa o git pull ---------------------------------------------------
$gitBin = env_value('DEPLOY_GIT_BIN', 'git');
$root   = escapeshellarg(PROJECT_ROOT);
$git    = escapeshellarg($gitBin);

// Reset defensivo do ponteiro + fast-forward pull da branch de deploy.
$command = sprintf(
    '%s -C %s fetch --all 2>&1 && %s -C %s reset --hard origin/%s 2>&1',
    $git, $root, $git, $root, escapeshellarg($branch)
);

$output   = [];
$exitCode = 0;
exec($command, $output, $exitCode);
$outputStr = implode("\n", $output);

if ($exitCode !== 0) {
    deploy_log("FAIL (exit {$exitCode}): {$outputStr}");
    respond(500, 'error', 'Falha no git pull.', ['output' => $outputStr]);
}

$after = substr($data['after'] ?? '', 0, 7);
deploy_log("OK: deploy de '{$branch}' -> {$after}\n{$outputStr}");
respond(200, 'ok', "Deploy concluído na branch '{$branch}'.", [
    'commit' => $after,
    'output' => $outputStr,
]);
