<?php

namespace App\Services\Ai;

use App\Models\Customer;
use App\Models\Equipment;
use App\Models\Wifi;
use App\Services\CustomerService;
use App\Services\EquipmentService;
use App\Validators\CustomerValidator;
use App\Validators\EquipmentValidator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CommandExecutor
{
    protected CustomerService $customerService;
    protected EquipmentService $equipmentService;

    public function __construct()
    {
        $this->customerService  = new CustomerService();
        $this->equipmentService = new EquipmentService();
    }

    /**
     * Executa uma lista de commands dentro de uma transaction.
     *
     * @param  array  $plan  {plan_id, commands[]}
     * @return array  {plan_id, results[]}
     */
    public function execute(array $plan): array
    {
        $planId   = $plan['plan_id'] ?? 'unknown';
        $commands = $plan['commands'] ?? [];
        $results  = [];

        DB::beginTransaction();
        try {
            $resolvedCustomerId = null;

            foreach ($commands as $index => $cmd) {
                $action = $cmd['action'];
                $args   = $cmd['args'] ?? [];

                // Encadear customer_id resolvido de comandos anteriores
                if ($resolvedCustomerId && empty($args['customer_id']) && str_starts_with($action, 'equipment.')) {
                    $args['customer_id'] = $resolvedCustomerId;
                }

                $result = $this->dispatchCommand($action, $args);

                // Capturar customer_id do resultado para encadear
                if ($result['status'] === 'ok' && str_starts_with($action, 'customer.')) {
                    $data = $result['data'] ?? [];
                    if (!empty($data) && is_array($data)) {
                        $first = isset($data[0]) ? $data[0] : $data;
                        if (!empty($first['id'])) {
                            $resolvedCustomerId = (int) $first['id'];
                        }
                    }
                }

                $results[] = [
                    'index'  => $index,
                    'action' => $action,
                    'status' => $result['status'],
                    'data'   => $result['data'] ?? null,
                    'errors' => $result['errors'] ?? null,
                    'type'   => $result['type'] ?? null,
                ];

                // Se algum comando falha, rollback
                if ($result['status'] === 'error') {
                    DB::rollBack();
                    Log::warning('CommandExecutor: falha em comando', [
                        'plan_id' => $planId,
                        'index'   => $index,
                        'action'  => $action,
                        'errors'  => $result['errors'],
                    ]);
                    return [
                        'plan_id' => $planId,
                        'status'  => 'error',
                        'message' => "Erro no comando #{$index}: " . ($result['errors']['_message'] ?? 'Erro de validação.'),
                        'results' => $results,
                    ];
                }
            }
            DB::commit();

            Log::info('CommandExecutor: plano executado', [
                'plan_id'     => $planId,
                'total_cmds'  => count($commands),
            ]);

            return [
                'plan_id' => $planId,
                'status'  => 'ok',
                'message' => 'Todos os comandos executados com sucesso.',
                'results' => $results,
            ];
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error('CommandExecutor: exception', [
                'plan_id' => $planId,
                'error'   => $e->getMessage(),
            ]);
            return [
                'plan_id' => $planId,
                'status'  => 'error',
                'message' => 'Erro inesperado: ' . $e->getMessage(),
                'results' => $results,
            ];
        }
    }

    /**
     * Dispatcha um único comando.
     */
    protected function dispatchCommand(string $action, array $args): array
    {
        return match ($action) {
            'customer.create'  => $this->customerCreate($args),
            'customer.update'  => $this->customerUpdate($args),
            'customer.delete'  => $this->customerDelete($args),
            'equipment.create' => $this->equipmentCreate($args),
            'equipment.update' => $this->equipmentUpdate($args),
            'equipment.delete' => $this->equipmentDelete($args),
            'customer.show'    => $this->customerShow($args),
            'customer.list'    => $this->customerList($args),
            'equipment.show'   => $this->equipmentShow($args),
            'equipment.list'   => $this->equipmentList($args),
            default            => ['status' => 'error', 'errors' => ['_message' => "Ação '$action' desconhecida."]],
        };
    }

    // ============================
    // CUSTOMER
    // ============================

    protected function customerCreate(array $args): array
    {
        $validation = CustomerValidator::validateCreate($args);
        if (!$validation['valid']) {
            return ['status' => 'error', 'errors' => $validation['errors']];
        }

        // Idempotência: se CNPJ já existe, não duplicar
        if (!empty($args['cnpj']) && $this->customerService->cnpjExists($args['cnpj'])) {
            return [
                'status' => 'error',
                'errors' => ['cnpj' => ['Este CNPJ já está cadastrado.'], '_message' => 'CNPJ duplicado.'],
            ];
        }

        $customer = $this->customerService->create($validation['data']);
        return ['status' => 'ok', 'data' => $customer->toArray()];
    }

    protected function customerUpdate(array $args): array
    {
        $customer = $this->resolveCustomer($args);
        if ($customer === null) {
            return ['status' => 'error', 'errors' => ['_message' => 'Cliente não encontrado.']];
        }
        if ($customer === 'ambiguous') {
            return ['status' => 'error', 'errors' => ['_message' => 'Múltiplos clientes encontrados. Especifique id ou CNPJ.']];
        }

        // Remover target keys dos dados de update
        $data = array_diff_key($args, array_flip(['id', 'cnpj_search']));

        $validation = CustomerValidator::validateUpdate($data, $customer->id);
        if (!$validation['valid']) {
            return ['status' => 'error', 'errors' => $validation['errors']];
        }

        $updated = $this->customerService->update($validation['data'], $customer->id);
        return ['status' => 'ok', 'data' => $updated ? $updated->toArray() : []];
    }

    protected function customerDelete(array $args): array
    {
        $customer = $this->resolveCustomer($args);
        if ($customer === null) {
            return ['status' => 'error', 'errors' => ['_message' => 'Cliente não encontrado.']];
        }
        if ($customer === 'ambiguous') {
            return ['status' => 'error', 'errors' => ['_message' => 'Múltiplos clientes encontrados. Especifique id ou CNPJ.']];
        }

        $this->customerService->delete($customer->id);
        return ['status' => 'ok', 'data' => ['id' => $customer->id, 'deleted' => true]];
    }

    /**
     * Resolve um customer a partir de id ou cnpj.
     *
     * @return Customer|null|string  null=não encontrado, 'ambiguous'=múltiplos
     */
    protected function resolveCustomer(array $args): Customer|null|string
    {
        if (!empty($args['id'])) {
            return $this->customerService->find((int) $args['id']);
        }

        if (!empty($args['cnpj'])) {
            $cnpj = preg_replace('/\D/', '', $args['cnpj']);
            return $this->customerService->findByCnpj($cnpj);
        }

        return null;
    }

    /**
     * Resolve o customer_id de um comando de equipment.
     *
     * Prioridade: customer_id explícito > cnpj > company_name.
     *
     * @return array{status: string, customer_id: int|null, errors?: array}
     *               status 'ok' com customer_id (int ou null se não informado)
     *               ou status 'error' com errors[_message].
     */
    protected function resolveEquipmentCustomerId(array $args): array
    {
        if (!empty($args['customer_id'])) {
            return ['status' => 'ok', 'customer_id' => (int) $args['customer_id']];
        }

        if (!empty($args['cnpj'])) {
            $cnpj     = preg_replace('/\D/', '', $args['cnpj']);
            $customer = $this->customerService->findByCnpj($cnpj);
            if (!$customer) {
                return [
                    'status'      => 'error',
                    'customer_id' => null,
                    'errors'      => ['_message' => "Nenhum cliente encontrado com o CNPJ {$cnpj}."],
                ];
            }
            return ['status' => 'ok', 'customer_id' => (int) $customer->id];
        }

        if (!empty($args['company_name'])) {
            $matches = $this->customerService->searchByName($args['company_name']);
            if ($matches->count() === 0) {
                return [
                    'status'      => 'error',
                    'customer_id' => null,
                    'errors'      => ['_message' => 'Nenhum cliente encontrado com esse nome.'],
                ];
            }
            if ($matches->count() > 1) {
                return [
                    'status'      => 'error',
                    'customer_id' => null,
                    'errors'      => ['_message' => 'Múltiplos clientes encontrados com esse nome. Especifique o CNPJ ou o id do cliente.'],
                ];
            }
            return ['status' => 'ok', 'customer_id' => (int) $matches->first()->id];
        }

        return ['status' => 'ok', 'customer_id' => null];
    }

    // ============================
    // EQUIPMENT
    // ============================

    protected function equipmentCreate(array $args): array
    {
        // Resolver customer_id a partir de cnpj ou company_name quando o
        // usuário identifica o cliente sem informar o id diretamente.
        $resolution = $this->resolveEquipmentCustomerId($args);
        if ($resolution['status'] === 'error') {
            return ['status' => 'error', 'errors' => $resolution['errors']];
        }
        if ($resolution['customer_id'] !== null) {
            $args['customer_id'] = $resolution['customer_id'];
        }
        // cnpj/company_name são apenas para localizar o cliente: não pertencem
        // à tabela equipments e não devem chegar ao validator/service.
        unset($args['cnpj'], $args['company_name']);

        // Extrair e transformar sub-tabelas dos flat fields
        $subData = $this->extractEquipmentSubData($args);
        $equipArgs = $subData['equipArgs'];

        $validation = EquipmentValidator::validateCreate($equipArgs);
        if (!$validation['valid']) {
            return ['status' => 'error', 'errors' => $validation['errors']];
        }

        // Montar $data completo para EquipmentService (que delega aos UseCases)
        $data = $validation['data'];
        if ($subData['network']) {
            $data['network'] = $subData['network'];
        }
        if ($subData['network_add']) {
            $data['network_add'] = $subData['network_add'];
        }
        if ($subData['access_equip']) {
            $data['access_equip'] = $subData['access_equip'];
        }

        $equip = $this->equipmentService->create($data);

        // WiFi (criado diretamente, sem UseCase existente)
        if ($subData['wifi']) {
            Wifi::create(array_merge($subData['wifi'], [
                'equip_id'    => $equip->id,
                'customer_id' => $data['customer_id'],
            ]));
        }

        // Recarregar com relações
        $equip->load(['network', 'access']);
        $result = $equip->toArray();
        if ($subData['wifi']) {
            $result['wifi'] = Wifi::where('equip_id', $equip->id)->first()?->toArray();
        }

        return ['status' => 'ok', 'data' => $result];
    }

    protected function equipmentUpdate(array $args): array
    {
        if (empty($args['id'])) {
            return ['status' => 'error', 'errors' => ['_message' => 'ID do equipamento é obrigatório para update.']];
        }

        $equip = $this->equipmentService->find((int) $args['id']);
        if (!$equip) {
            return ['status' => 'error', 'errors' => ['_message' => 'Equipamento não encontrado.']];
        }

        // Extrair e transformar sub-tabelas dos flat fields
        $subData = $this->extractEquipmentSubData($args);
        $equipArgs = array_diff_key($subData['equipArgs'], array_flip(['id']));

        $validation = EquipmentValidator::validateUpdate($equipArgs, $equip->id);
        if (!$validation['valid']) {
            return ['status' => 'error', 'errors' => $validation['errors']];
        }

        // Montar $data completo para EquipmentService
        $data = $validation['data'];
        $data['customer_id'] = $equip->customer_id;
        $data['device_id']   = $equip->device_id;

        if ($subData['network']) {
            $data['network'] = $subData['network'];
        }
        if ($subData['network_add']) {
            $data['network_add'] = $subData['network_add'];
        }
        if ($subData['access_equip']) {
            $data['access_equip'] = $subData['access_equip'];
        }

        $this->equipmentService->update($data, $equip->id);

        // WiFi
        if ($subData['wifi']) {
            Wifi::where('equip_id', $equip->id)->delete();
            Wifi::create(array_merge($subData['wifi'], [
                'equip_id'    => $equip->id,
                'customer_id' => $equip->customer_id,
            ]));
        }

        return ['status' => 'ok', 'data' => array_merge(['id' => $equip->id], $validation['data'])];
    }

    protected function equipmentDelete(array $args): array
    {
        if (empty($args['id'])) {
            return ['status' => 'error', 'errors' => ['_message' => 'ID do equipamento é obrigatório para delete.']];
        }

        $equip = $this->equipmentService->find((int) $args['id']);
        if (!$equip) {
            return ['status' => 'error', 'errors' => ['_message' => 'Equipamento não encontrado.']];
        }

        // Limpar WiFi associado
        Wifi::where('equip_id', $equip->id)->delete();

        $this->equipmentService->delete($equip->id);
        return ['status' => 'ok', 'data' => ['id' => $equip->id, 'deleted' => true]];
    }

    // ============================
    // EQUIPMENT SUB-DATA HELPER
    // ============================

    /**
     * Extrai campos de sub-tabelas (network, access_equip, wifi)
     * dos flat fields da IA e retorna estruturas separadas.
     */
    protected function extractEquipmentSubData(array $args): array
    {
        // Campos que pertencem às sub-tabelas (remover dos args do equipment)
        $subFieldPrefixes = [
            'network_mac', 'network_ip', 'network_mask', 'network_gateway',
            'network_add_mac', 'network_add_ip', 'network_add_mask', 'network_add_gateway',
            'access_username_1', 'access_password_1', 'access_group_1',
            'access_username_2', 'access_password_2', 'access_group_2',
            'access_username_3', 'access_password_3', 'access_group_3',
            'wifi_ssid', 'wifi_password',
        ];

        $equipArgs = array_diff_key($args, array_flip($subFieldPrefixes));

        // --- Network principal ---
        $network = null;
        if (!empty($args['network_mac']) || !empty($args['network_ip']) || !empty($args['network_mask']) || !empty($args['network_gateway'])) {
            $network = [
                'mac'     => $args['network_mac'] ?? null,
                'ip'      => $args['network_ip'] ?? null,
                'mask'    => $args['network_mask'] ?? null,
                'gateway' => $args['network_gateway'] ?? null,
            ];
        }

        // --- Network adicional ---
        $networkAdd = null;
        if (!empty($args['network_add_mac']) || !empty($args['network_add_ip']) || !empty($args['network_add_mask']) || !empty($args['network_add_gateway'])) {
            $networkAdd = [
                'mac'     => $args['network_add_mac'] ?? null,
                'ip'      => $args['network_add_ip'] ?? null,
                'mask'    => $args['network_add_mask'] ?? null,
                'gateway' => $args['network_add_gateway'] ?? null,
            ];
        }

        // --- Access equip (até 3 usuários) ---
        $accessEquip = null;
        $usernames = [];
        $passwords = [];
        $groups    = [];
        $ids       = [];
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($args["access_username_{$i}"])) {
                $usernames[] = $args["access_username_{$i}"];
                $passwords[] = $args["access_password_{$i}"] ?? '';
                $groups[]    = $args["access_group_{$i}"] ?? '';
                $ids[]       = null;
            }
        }
        if (!empty($usernames)) {
            $accessEquip = [
                'id'       => $ids,
                'username' => $usernames,
                'password' => $passwords,
                'group'    => $groups,
            ];
        }

        // --- WiFi ---
        $wifi = null;
        if (!empty($args['wifi_ssid'])) {
            $wifi = [
                'ssid'     => $args['wifi_ssid'],
                'password' => $args['wifi_password'] ?? '',
            ];
        }

        return [
            'equipArgs'    => $equipArgs,
            'network'      => $network,
            'network_add'  => $networkAdd,
            'access_equip' => $accessEquip,
            'wifi'         => $wifi,
        ];
    }

    // ============================
    // READ (CUSTOMER)
    // ============================

    protected function customerShow(array $args): array
    {
        $customer = $this->resolveCustomer($args);

        // Se veio company_name sem id/cnpj, buscar por nome
        if ($customer === null && !empty($args['company_name'])) {
            $matches = $this->customerService->searchByName($args['company_name']);
            if ($matches->count() === 0) {
                return ['status' => 'error', 'errors' => ['_message' => 'Nenhum cliente encontrado com esse nome.']];
            }
            if ($matches->count() > 1) {
                return ['status' => 'ok', 'data' => $matches->toArray(), 'type' => 'table'];
            }
            $customer = $matches->first();
        }

        if ($customer === null) {
            return ['status' => 'error', 'errors' => ['_message' => 'Cliente não encontrado.']];
        }
        if ($customer === 'ambiguous') {
            return ['status' => 'error', 'errors' => ['_message' => 'Múltiplos clientes encontrados.']];
        }

        return ['status' => 'ok', 'data' => [$customer->toArray()], 'type' => 'table'];
    }

    protected function customerList(array $args): array
    {
        $customers = $this->customerService->list();
        return ['status' => 'ok', 'data' => $customers->toArray(), 'type' => 'table'];
    }

    // ============================
    // READ (EQUIPMENT)
    // ============================

    protected function equipmentShow(array $args): array
    {
        if (empty($args['id'])) {
            return ['status' => 'error', 'errors' => ['_message' => 'ID do equipamento é obrigatório.']];
        }

        $equip = $this->equipmentService->find((int) $args['id']);
        if (!$equip) {
            return ['status' => 'error', 'errors' => ['_message' => 'Equipamento não encontrado.']];
        }

        $equip->load(['network', 'access']);
        $data = $equip->toArray();
        $data['wifi'] = Wifi::where('equip_id', $equip->id)->first()?->toArray();

        return ['status' => 'ok', 'data' => [$data], 'type' => 'table'];
    }

    protected function equipmentList(array $args): array
    {
        $customerId = $args['customer_id'] ?? null;

        // Resolver customer_id por company_name se não informado diretamente
        if (empty($customerId) && !empty($args['company_name'])) {
            $matches = $this->customerService->searchByName($args['company_name']);
            if ($matches->count() === 1) {
                $customerId = $matches->first()->id;
            } elseif ($matches->count() > 1) {
                return ['status' => 'error', 'errors' => ['_message' => 'Múltiplos clientes encontrados com esse nome. Especifique o customer_id.']];
            } else {
                return ['status' => 'error', 'errors' => ['_message' => 'Nenhum cliente encontrado com esse nome.']];
            }
        }

        // Nenhum cliente informado: lista todos os equipamentos de todos os clientes.
        $query = Equipment::whereNull('deleted_at')
            ->with(['network', 'access']);

        if (!empty($customerId)) {
            $query->where('customer_id', (int) $customerId);
        }

        $equips = $query->get();

        $data = $equips->map(function ($equip) {
            $arr = $equip->toArray();
            $arr['wifi'] = Wifi::where('equip_id', $equip->id)->first()?->toArray();
            return $arr;
        })->toArray();

        return ['status' => 'ok', 'data' => $data, 'type' => 'table'];
    }
}
