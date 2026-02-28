<?php

namespace App\Services\Ai;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OpenAiClient
{
    protected string $apiKey;
    protected string $model;
    protected string $baseUrl;
    protected int $timeout;

    public function __construct()
    {
        $this->apiKey  = config('openai.api_key');
        $this->model   = config('openai.model');
        $this->baseUrl = rtrim(config('openai.base_url'), '/');
        $this->timeout = (int) config('openai.timeout', 30);
    }

    /**
     * Envia uma requisição de chat completions com structured output (json_schema).
     *
     * @param  string $systemPrompt
     * @param  string $userMessage
     * @param  array  $jsonSchema   Schema JSON para response_format strict
     * @return array  parsed response content
     *
     * @throws \RuntimeException
     */
    public function chatWithSchema(string $systemPrompt, string $userMessage, array $jsonSchema): array
    {
        $payload = [
            'model'    => $this->model,
            'temperature' => 0.1,
            'messages' => [
                ['role' => 'system', 'content' => $systemPrompt],
                ['role' => 'user',   'content' => $userMessage],
            ],
            'response_format' => [
                'type' => 'json_schema',
                'json_schema' => [
                    'name'   => 'ai_plan',
                    'strict' => true,
                    'schema' => $jsonSchema,
                ],
            ],
        ];

        Log::info('OpenAI request', [
            'model'   => $this->model,
            'message' => mb_substr($userMessage, 0, 200),
        ]);

        $response = Http::timeout($this->timeout)
            ->withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type'  => 'application/json',
            ])
            ->post("{$this->baseUrl}/v1/chat/completions", $payload);

        if ($response->failed()) {
            Log::error('OpenAI API error', [
                'status' => $response->status(),
                'body'   => mb_substr($response->body(), 0, 500),
            ]);
            throw new \RuntimeException('Erro ao comunicar com a OpenAI: ' . $response->status());
        }

        $body = $response->json();

        Log::info('OpenAI response', [
            'usage'  => $body['usage'] ?? null,
            'finish' => $body['choices'][0]['finish_reason'] ?? null,
        ]);

        $content = $body['choices'][0]['message']['content'] ?? null;

        if (!$content) {
            throw new \RuntimeException('Resposta vazia da OpenAI.');
        }

        $parsed = json_decode($content, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error('OpenAI JSON parse error', ['raw' => mb_substr($content, 0, 500)]);
            throw new \RuntimeException('Resposta da OpenAI não é JSON válido.');
        }

        return $parsed;
    }
}
