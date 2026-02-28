<?php

namespace App\Services\Ai;

/**
 * Define a whitelist de actions e campos permitidos por action.
 * Todos os campos refletem as tabelas reais do banco (customers / equipments).
 */
class ActionSchema
{
    /**
     * Ações permitidas e seus campos válidos.
     */
    public static function whitelist(): array
    {
        return [
            'customer.create' => [
                'required' => ['company_name'],
                'optional' => [
                    'external_id', 'phone', 'email', 'cnpj',
                    'address', 'number', 'city', 'state', 'zip_code',
                ],
            ],
            'customer.update' => [
                'target'   => ['id', 'cnpj'],          // campos para localizar o registro
                'optional' => [
                    'external_id', 'company_name', 'phone', 'email', 'cnpj',
                    'address', 'number', 'city', 'state', 'zip_code',
                ],
            ],
            'customer.delete' => [
                'target' => ['id', 'cnpj'],
            ],
            'equipment.create' => [
                'required' => ['customer_id', 'device_id'],
                'optional' => [
                    'brand', 'model', 'serial', 'status', 'port',
                    'email', 'phone', 'ddns', 'access_ip',
                    'hd_brand', 'storage_capacity',
                    'installation_location', 'description',
                    // Rede principal
                    'network_mac', 'network_ip', 'network_mask', 'network_gateway',
                    // Rede adicional
                    'network_add_mac', 'network_add_ip', 'network_add_mask', 'network_add_gateway',
                    // Usuários de acesso (até 3)
                    'access_username_1', 'access_password_1', 'access_group_1',
                    'access_username_2', 'access_password_2', 'access_group_2',
                    'access_username_3', 'access_password_3', 'access_group_3',
                    // WiFi
                    'wifi_ssid', 'wifi_password',
                ],
            ],
            'equipment.update' => [
                'target'   => ['id'],
                'optional' => [
                    'brand', 'model', 'serial', 'status', 'port',
                    'email', 'phone', 'ddns', 'access_ip',
                    'hd_brand', 'storage_capacity',
                    'installation_location', 'description',
                    'customer_id', 'device_id',
                    // Rede principal
                    'network_mac', 'network_ip', 'network_mask', 'network_gateway',
                    // Rede adicional
                    'network_add_mac', 'network_add_ip', 'network_add_mask', 'network_add_gateway',
                    // Usuários de acesso (até 3)
                    'access_username_1', 'access_password_1', 'access_group_1',
                    'access_username_2', 'access_password_2', 'access_group_2',
                    'access_username_3', 'access_password_3', 'access_group_3',
                    // WiFi
                    'wifi_ssid', 'wifi_password',
                ],
            ],
            'equipment.delete' => [
                'target' => ['id'],
            ],
            'customer.show' => [
                'target'   => ['id', 'cnpj', 'company_name'],
            ],
            'customer.list' => [
                'optional' => [],
            ],
            'equipment.show' => [
                'target'   => ['id'],
            ],
            'equipment.list' => [
                'target'   => ['customer_id', 'company_name'],
            ],
        ];
    }

    /**
     * Retorna lista de nomes de ações válidas.
     */
    public static function allowedActions(): array
    {
        return array_keys(static::whitelist());
    }

    /**
     * Retorna definição de uma action.
     */
    public static function getAction(string $action): ?array
    {
        return static::whitelist()[$action] ?? null;
    }

    /**
     * Filtra args mantendo somente campos permitidos para a action.
     */
    public static function filterArgs(string $action, array $args): array
    {
        $def = static::getAction($action);
        if (!$def) {
            return [];
        }

        $allowed = array_merge(
            $def['required'] ?? [],
            $def['optional'] ?? [],
            $def['target']   ?? [],
        );

        return array_intersect_key($args, array_flip($allowed));
    }

    /**
     * Valida se todos os required estão presentes.
     */
    public static function validateRequired(string $action, array $args): array
    {
        $def = static::getAction($action);
        if (!$def) {
            return ["Ação '$action' não é permitida."];
        }

        $errors = [];
        foreach ($def['required'] ?? [] as $field) {
            if (empty($args[$field]) && $args[$field] !== '0' && $args[$field] !== 0) {
                $errors[] = "Campo obrigatório '$field' não informado para $action.";
            }
        }

        return $errors;
    }

    /**
     * Gera o JSON Schema (para Structured Output da OpenAI).
     * Usado no response_format.json_schema.schema
     */
    public static function openAiResponseSchema(): array
    {
        return [
            'type' => 'object',
            'properties' => [
                'status' => [
                    'type' => 'string',
                    'enum' => ['ok', 'needs_input', 'error'],
                    'description' => 'Status do plano: ok se pronto para executar, needs_input se há ambiguidade, error se impossível.',
                ],
                'preview' => [
                    'type' => 'string',
                    'description' => 'Texto curto em pt-BR descrevendo o que será feito.',
                ],
                'message' => [
                    'type' => 'string',
                    'description' => 'Mensagem adicional (usado em needs_input ou error).',
                ],
                'commands' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'action' => [
                                'type' => 'string',
                                'enum' => static::allowedActions(),
                                'description' => 'Ação a executar.',
                            ],
                            'args' => [
                                'type' => 'object',
                                'description' => 'Argumentos da ação. Todos os campos são opcionais conforme a ação.',
                                'properties' => [
                                    // Customer fields
                                    'id'            => ['type' => ['integer', 'null'], 'description' => 'ID do registro (para update/delete).'],
                                    'external_id'   => ['type' => ['string', 'null'],  'description' => 'ID externo do cliente.'],
                                    'company_name'  => ['type' => ['string', 'null'],  'description' => 'Nome da empresa/cliente.'],
                                    'phone'         => ['type' => ['string', 'null'],  'description' => 'Telefone.'],
                                    'email'         => ['type' => ['string', 'null'],  'description' => 'E-mail.'],
                                    'cnpj'          => ['type' => ['string', 'null'],  'description' => 'CNPJ (somente dígitos).'],
                                    'address'       => ['type' => ['string', 'null'],  'description' => 'Endereço.'],
                                    'number'        => ['type' => ['string', 'null'],  'description' => 'Número do endereço.'],
                                    'city'          => ['type' => ['string', 'null'],  'description' => 'Cidade.'],
                                    'state'         => ['type' => ['string', 'null'],  'description' => 'Estado (sigla 2 letras).'],
                                    'zip_code'      => ['type' => ['string', 'null'],  'description' => 'CEP.'],
                                    // Equipment fields
                                    'customer_id'           => ['type' => ['integer', 'null'], 'description' => 'ID do cliente dono do equipamento.'],
                                    'device_id'             => ['type' => ['integer', 'null'], 'description' => 'Tipo: 1=DVR, 2=Câmera, 3=Roteador.'],
                                    'brand'                 => ['type' => ['string', 'null'],  'description' => 'Marca do equipamento.'],
                                    'model'                 => ['type' => ['string', 'null'],  'description' => 'Modelo do equipamento.'],
                                    'serial'                => ['type' => ['string', 'null'],  'description' => 'Número de série.'],
                                    'status'                => ['type' => ['string', 'null'],  'description' => 'Status (default: active).'],
                                    'port'                  => ['type' => ['integer', 'null'], 'description' => 'Porta de acesso.'],
                                    'ddns'                  => ['type' => ['string', 'null'],  'description' => 'DDNS.'],
                                    'access_ip'             => ['type' => ['string', 'null'],  'description' => 'IP de acesso.'],
                                    'hd_brand'              => ['type' => ['string', 'null'],  'description' => 'Marca do HD.'],
                                    'storage_capacity'      => ['type' => ['string', 'null'],  'description' => 'Capacidade de armazenamento.'],
                                    'installation_location' => ['type' => ['string', 'null'],  'description' => 'Local de instalação.'],
                                    'description'           => ['type' => ['string', 'null'],  'description' => 'Descrição.'],
                                    // Network fields
                                    'network_mac'           => ['type' => ['string', 'null'],  'description' => 'MAC da rede principal.'],
                                    'network_ip'            => ['type' => ['string', 'null'],  'description' => 'IP da rede principal.'],
                                    'network_mask'          => ['type' => ['string', 'null'],  'description' => 'Máscara da rede principal.'],
                                    'network_gateway'       => ['type' => ['string', 'null'],  'description' => 'Gateway da rede principal.'],
                                    'network_add_mac'       => ['type' => ['string', 'null'],  'description' => 'MAC da rede adicional.'],
                                    'network_add_ip'        => ['type' => ['string', 'null'],  'description' => 'IP da rede adicional.'],
                                    'network_add_mask'      => ['type' => ['string', 'null'],  'description' => 'Máscara da rede adicional.'],
                                    'network_add_gateway'   => ['type' => ['string', 'null'],  'description' => 'Gateway da rede adicional.'],
                                    // Access equip users (up to 3)
                                    'access_username_1'     => ['type' => ['string', 'null'],  'description' => 'Username do 1º usuário de acesso.'],
                                    'access_password_1'     => ['type' => ['string', 'null'],  'description' => 'Password do 1º usuário de acesso.'],
                                    'access_group_1'        => ['type' => ['string', 'null'],  'description' => 'Grupo do 1º usuário (ex: Administrators).'],
                                    'access_username_2'     => ['type' => ['string', 'null'],  'description' => 'Username do 2º usuário de acesso.'],
                                    'access_password_2'     => ['type' => ['string', 'null'],  'description' => 'Password do 2º usuário de acesso.'],
                                    'access_group_2'        => ['type' => ['string', 'null'],  'description' => 'Grupo do 2º usuário.'],
                                    'access_username_3'     => ['type' => ['string', 'null'],  'description' => 'Username do 3º usuário de acesso.'],
                                    'access_password_3'     => ['type' => ['string', 'null'],  'description' => 'Password do 3º usuário de acesso.'],
                                    'access_group_3'        => ['type' => ['string', 'null'],  'description' => 'Grupo do 3º usuário.'],
                                    // WiFi
                                    'wifi_ssid'             => ['type' => ['string', 'null'],  'description' => 'SSID da rede WiFi.'],
                                    'wifi_password'         => ['type' => ['string', 'null'],  'description' => 'Senha da rede WiFi.'],
                                ],
                                'required' => [
                                    'id', 'external_id', 'company_name', 'phone', 'email', 'cnpj',
                                    'address', 'number', 'city', 'state', 'zip_code',
                                    'customer_id', 'device_id', 'brand', 'model', 'serial',
                                    'status', 'port', 'ddns', 'access_ip', 'hd_brand',
                                    'storage_capacity', 'installation_location', 'description',
                                    'network_mac', 'network_ip', 'network_mask', 'network_gateway',
                                    'network_add_mac', 'network_add_ip', 'network_add_mask', 'network_add_gateway',
                                    'access_username_1', 'access_password_1', 'access_group_1',
                                    'access_username_2', 'access_password_2', 'access_group_2',
                                    'access_username_3', 'access_password_3', 'access_group_3',
                                    'wifi_ssid', 'wifi_password',
                                ],
                                'additionalProperties' => false,
                            ],
                        ],
                        'required' => ['action', 'args'],
                        'additionalProperties' => false,
                    ],
                    'description' => 'Lista de comandos a executar.',
                ],
                'options' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'id'    => ['type' => 'integer', 'description' => 'ID do registro candidato.'],
                            'label' => ['type' => 'string',  'description' => 'Label para exibição.'],
                        ],
                        'required' => ['id', 'label'],
                        'additionalProperties' => false,
                    ],
                    'description' => 'Opções quando needs_input (ex.: registros candidatos).',
                ],
            ],
            'required' => ['status', 'preview', 'message', 'commands', 'options'],
            'additionalProperties' => false,
        ];
    }

    /**
     * Gera texto descritivo dos campos para o system prompt da IA.
     */
    public static function fieldsDescription(): string
    {
        $lines = [];
        foreach (static::whitelist() as $action => $def) {
            $req = implode(', ', $def['required'] ?? []);
            $opt = implode(', ', $def['optional'] ?? []);
            $tgt = implode(', ', $def['target'] ?? []);
            $parts = [];
            if ($req) $parts[] = "obrigatórios: $req";
            if ($opt) $parts[] = "opcionais: $opt";
            if ($tgt) $parts[] = "identificadores: $tgt";
            $lines[] = "- $action => " . implode(' | ', $parts);
        }
        return implode("\n", $lines);
    }
}
