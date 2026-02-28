<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class EquipmentValidator
{
    /**
     * Valida dados para criação de equipment.
     */
    public static function validateCreate(array $data): array
    {
        $validator = Validator::make($data, [
            'customer_id'           => 'required|integer|exists:customers,id',
            'device_id'             => 'required|integer|in:1,2,3',
            'brand'                 => 'nullable|string|max:255',
            'model'                 => 'nullable|string|max:255',
            'serial'                => 'nullable|string|max:255',
            'status'                => 'nullable|string|max:50',
            'port'                  => 'nullable|integer',
            'email'                 => 'nullable|email|max:255',
            'phone'                 => 'nullable|string|max:30',
            'ddns'                  => 'nullable|string|max:255',
            'access_ip'             => 'nullable|string|max:255',
            'hd_brand'              => 'nullable|string|max:255',
            'storage_capacity'      => 'nullable|string|max:100',
            'installation_location' => 'nullable|string|max:255',
            'description'           => 'nullable|string|max:1000',
        ], static::messages());

        return [
            'valid'  => $validator->passes(),
            'errors' => $validator->errors()->toArray(),
            'data'   => $data,
        ];
    }

    /**
     * Valida dados para atualização de equipment.
     */
    public static function validateUpdate(array $data, int $id): array
    {
        $validator = Validator::make($data, [
            'customer_id'           => 'sometimes|integer|exists:customers,id',
            'device_id'             => 'sometimes|integer|in:1,2,3',
            'brand'                 => 'nullable|string|max:255',
            'model'                 => 'nullable|string|max:255',
            'serial'                => 'nullable|string|max:255',
            'status'                => 'nullable|string|max:50',
            'port'                  => 'nullable|integer',
            'email'                 => 'nullable|email|max:255',
            'phone'                 => 'nullable|string|max:30',
            'ddns'                  => 'nullable|string|max:255',
            'access_ip'             => 'nullable|string|max:255',
            'hd_brand'              => 'nullable|string|max:255',
            'storage_capacity'      => 'nullable|string|max:100',
            'installation_location' => 'nullable|string|max:255',
            'description'           => 'nullable|string|max:1000',
        ], static::messages());

        return [
            'valid'  => $validator->passes(),
            'errors' => $validator->errors()->toArray(),
            'data'   => $data,
        ];
    }

    protected static function messages(): array
    {
        return [
            'customer_id.required' => 'O cliente (customer_id) é obrigatório.',
            'customer_id.exists'   => 'O cliente informado não existe.',
            'device_id.required'   => 'O tipo de dispositivo (device_id) é obrigatório.',
            'device_id.in'         => 'O tipo de dispositivo deve ser 1 (DVR), 2 (Câmera) ou 3 (Roteador).',
            'email.email'          => 'O e-mail informado não é válido.',
            'port.integer'         => 'A porta deve ser um número inteiro.',
        ];
    }
}
