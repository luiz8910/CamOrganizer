<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\Equipment;
use App\Services\EquipmentService;

class EquipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Change this to true if authorization is not needed.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_id' => 'required|integer',
            'brand' => 'nullable|string',
            'model' => 'nullable|string',
            'device_id' => 'required|int',
            'status' => 'nullable|string',
            'serial' => 'nullable|string',
            'port' => 'nullable|integer',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'ddns' => 'nullable|string',
            'access_ip' => 'nullable|string',
            'hd_brand' => 'nullable|string',
            'storage_capacity' => 'nullable|string',
            'installation_location' => 'nullable|string',
            'description' => 'nullable|string',
            'mac' => 'nullable|string',
            'ip' => 'nullable|string',
            'mask' => 'nullable|string',
            'gateway' => 'nullable|string',
            'network' => 'nullable|array',
            'network_add' => 'nullable|array',
            'access_equip' => 'nullable|array',
            'wifi_ssid' => 'nullable|string',
            'wifi_password' => 'nullable|string',
        ];
    }

    /**
     * Validações adicionais executadas após as regras básicas.
     * - Item 10: impede equipamento duplicado (serial ou IP) no mesmo cliente.
     * - Extra: exige nome + senha e barra usuários de acesso duplicados.
     */
    public function withValidator(Validator $validator)
    {
        $validator->after(function (Validator $validator) {
            $this->validateDuplicateEquipment($validator);
            $this->validateAccessEquip($validator);
        });
    }

    /**
     * Item 10 — não permitir dois equipamentos com o mesmo serial ou IP
     * para o mesmo cliente; informa qual equipamento já usa o valor.
     */
    protected function validateDuplicateEquipment(Validator $validator): void
    {
        $customerId = (int) $this->input('customer_id');
        $serial     = trim((string) $this->input('serial'));
        $accessIp   = trim((string) $this->input('access_ip'));

        if ($customerId <= 0 || ($serial === '' && $accessIp === '')) {
            return;
        }

        // No update, ignora o próprio registro.
        $currentId = $this->route('id') ? (int) $this->route('id') : null;

        $service = new EquipmentService();

        if ($serial !== '') {
            $dup = $service->findDuplicateSerial($customerId, $serial, $currentId);
            if ($dup) {
                $validator->errors()->add(
                    'serial',
                    'Já existe um equipamento com este número de série neste cliente: ' . $this->describeEquipment($dup) . '.'
                );
            }
        }

        if ($accessIp !== '') {
            $dup = $service->findDuplicateAccessIp($customerId, $accessIp, $currentId);
            if ($dup) {
                $validator->errors()->add(
                    'access_ip',
                    'Já existe um equipamento com este IP neste cliente: ' . $this->describeEquipment($dup) . '.'
                );
            }
        }
    }

    /**
     * Descrição amigável do equipamento duplicado para a mensagem de erro.
     */
    protected function describeEquipment(Equipment $equip): string
    {
        $label = trim(($equip->brand ?? '') . ' ' . ($equip->model ?? ''));
        $label = $label !== '' ? $label : 'Equipamento #' . $equip->id;

        $parts = [];
        if (!empty($equip->serial)) {
            $parts[] = 'Serial: ' . $equip->serial;
        }
        if (!empty($equip->access_ip)) {
            $parts[] = 'IP: ' . $equip->access_ip;
        }

        return $parts ? $label . ' (' . implode(', ', $parts) . ')' : $label;
    }

    /**
     * Extra — usuários de acesso do equipamento exigem nome e senha,
     * e não podem ter nome duplicado dentro do mesmo equipamento.
     */
    protected function validateAccessEquip(Validator $validator): void
    {
        $access = $this->input('access_equip');

        if (!is_array($access) || !isset($access['username']) || !is_array($access['username'])) {
            return;
        }

        $passwords = $access['password'] ?? [];
        $seen = [];

        foreach ($access['username'] as $i => $username) {
            $username = trim((string) $username);
            $password = trim((string) ($passwords[$i] ?? ''));

            // Linha totalmente vazia é ignorada.
            if ($username === '' && $password === '') {
                continue;
            }

            if ($username === '') {
                $validator->errors()->add("access_equip.username.$i", 'Informe o nome do usuário de acesso.');
            }

            if ($password === '') {
                $validator->errors()->add("access_equip.password.$i", 'Informe a senha do usuário de acesso.');
            }

            if ($username !== '') {
                $key = mb_strtolower($username);
                if (isset($seen[$key])) {
                    $validator->errors()->add("access_equip.username.$i", "Usuário de acesso duplicado: {$username}.");
                }
                $seen[$key] = true;
            }
        }
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()
                ->back()
                ->withInput($this->input())
                ->withErrors($validator->errors())
        );
    }
}
