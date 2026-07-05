<?php

namespace App\Services\Ai;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class AiPlanner
{
    protected OpenAiClient $client;

    public function __construct()
    {
        $this->client = new OpenAiClient();
    }

    /**
     * Recebe texto do usuário e retorna plano estruturado.
     */
    public function plan(string $userText): array
    {
        $systemPrompt = $this->buildSystemPrompt();
        $schema       = ActionSchema::openAiResponseSchema();

        try {
            $result = $this->client->chatWithSchema($systemPrompt, $userText, $schema);
        } catch (\Throwable $e) {
            Log::error('AiPlanner error', ['error' => $e->getMessage()]);
            return [
                'status'   => 'error',
                'plan_id'  => (string) Str::uuid(),
                'preview'  => 'Erro ao processar sua solicitação.',
                'message'  => $e->getMessage(),
                'commands' => [],
                'options'  => [],
            ];
        }

        // Validar ação na whitelist e filtrar args
        $commands = [];
        $allowed  = ActionSchema::allowedActions();

        foreach ($result['commands'] ?? [] as $cmd) {
            $action = $cmd['action'] ?? '';
            if (!in_array($action, $allowed, true)) {
                continue; // ignora ações fora da whitelist
            }

            $filteredArgs = ActionSchema::filterArgs($action, $cmd['args'] ?? []);

            // Remover campos null (o schema strict retorna todos os campos, maioria null)
            $filteredArgs = array_filter($filteredArgs, fn($v) => $v !== null);

            // Normalizar CNPJ (somente dígitos) se presente
            if (isset($filteredArgs['cnpj'])) {
                $filteredArgs['cnpj'] = preg_replace('/\D/', '', $filteredArgs['cnpj']);
            }

            $commands[] = [
                'action' => $action,
                'args'   => $filteredArgs,
            ];
        }

        $planId = (string) Str::uuid();

        return [
            'status'   => $result['status'] ?? 'error',
            'plan_id'  => $planId,
            'preview'  => $result['preview'] ?? '',
            'message'  => $result['message'] ?? '',
            'commands' => $commands,
            'options'  => $result['options'] ?? [],
        ];
    }

    /**
     * System prompt em pt-BR.
     */
    protected function buildSystemPrompt(): string
    {
        $fieldsDesc = ActionSchema::fieldsDescription();

        return <<<PROMPT
Você é um assistente de IA para o sistema JFTech, que gerencia Clientes (customers) e Equipamentos (equipments) como DVRs, Câmeras e Roteadores.

Sua função é interpretar comandos do usuário em português brasileiro e gerar um plano estruturado de ações.

=== AÇÕES PERMITIDAS E CAMPOS ===
{$fieldsDesc}

=== REGRAS IMPORTANTES ===
1. Você SÓ pode usar as ações listadas acima. Não invente ações.
2. Para CNPJ, normalize sempre para somente dígitos (remova pontos, barras, hífens).
3. Para customer.update e customer.delete, identifique o alvo pelo "id" ou "cnpj". Se o usuário mencionar só o nome e houver possibilidade de ambiguidade, retorne status "needs_input" com uma mensagem pedindo esclarecimento e, se possível, liste opções em "options".
4. Para equipment.update e equipment.delete, identifique pelo "id". Se ambíguo, retorne "needs_input".
5. O campo "device_id" em equipments corresponde ao tipo de equipamento: 1 = DVR, 2 = Câmera, 3 = Roteador.
5.1. Ao criar um equipamento (equipment.create), o cliente dono pode ser identificado de três formas: "customer_id" (id numérico), "cnpj" ou "company_name" (nome do cliente). Sempre inclua um desses no args. Se o usuário citar o cliente pelo CNPJ, coloque o CNPJ no campo "cnpj"; se citar pelo nome, use "company_name". NÃO invente um customer_id numérico quando o usuário informar apenas CNPJ ou nome.
6. O campo "status" em equipments usar "active" como padrão.
7. preview deve ser um texto curto e claro em pt-BR explicando o que será feito.
8. Se o comando do usuário for impossível ou não fizer sentido, retorne status "error".
9. commands deve ser SEMPRE uma lista (mesmo que com um único item).
10. options deve ser uma lista vazia [] quando não for needs_input.
11. message deve ser "" quando status for "ok".

=== AÇÕES DE CONSULTA (READ) ===
12. Quando o usuário pedir para VER, MOSTRAR, EXIBIR, LISTAR ou CONSULTAR dados de um cliente ou equipamento, use as ações:
    - customer.show: busca um cliente específico por id, cnpj ou company_name.
    - customer.list: lista todos os clientes.
    - equipment.show: busca um equipamento específico por id.
    - equipment.list: lista equipamentos de um cliente por customer_id ou company_name.
13. Para consultas, o campo company_name pode ser usado para buscar clientes por nome.
14. Quando o usuário pedir dados do cliente E seus equipamentos, gere dois comandos: customer.show + equipment.list. No equipment.list, use o mesmo company_name para identificar o cliente.

=== DADOS DE REDE (NETWORK) ===
14. Ao criar/atualizar equipamento, o usuário pode fornecer dados de rede (MAC, IP, Máscara, Gateway).
    Use os campos: network_mac, network_ip, network_mask, network_gateway para a rede principal.
15. Se houver uma segunda rede (rede adicional), use: network_add_mac, network_add_ip, network_add_mask, network_add_gateway.

=== USUÁRIOS DE ACESSO ===
16. Para cadastrar usuários de acesso ao equipamento (username/password/grupo), use:
    - access_username_1, access_password_1, access_group_1 (1º usuário)
    - access_username_2, access_password_2, access_group_2 (2º usuário)
    - access_username_3, access_password_3, access_group_3 (3º usuário)
17. Suportam-se até 3 usuários por comando. O campo group aceita valores como "Administrators", "Users", etc.

=== WIFI ===
18. Para cadastrar WiFi do equipamento, use: wifi_ssid (nome da rede) e wifi_password (senha da rede).

=== FORMATO DE RESPOSTA ===
Responda SEMPRE em JSON com a estrutura:
{
  "status": "ok" | "needs_input" | "error",
  "preview": "texto descritivo em pt-BR",
  "message": "mensagem adicional ou vazio",
  "commands": [{"action": "...", "args": {...}}],
  "options": []
}
PROMPT;
    }
}
