<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class CustomerValidator
{
    /**
     * Valida dados para criação de customer.
     */
    public static function validateCreate(array $data): array
    {
        // Normalizar CNPJ
        if (isset($data['cnpj'])) {
            $data['cnpj'] = preg_replace('/\D/', '', $data['cnpj']);
        }

        $validator = Validator::make($data, [
            'company_name' => 'required|string|max:255',
            'external_id'  => 'nullable|string|max:255|unique:customers,external_id',
            'phone'        => 'nullable|string|max:30',
            'email'        => 'nullable|email|max:255',
            'cnpj'         => 'nullable|string|size:14|unique:customers,cnpj',
            'address'      => 'nullable|string|max:255',
            'number'       => 'nullable|string|max:20',
            'city'         => 'nullable|string|max:100',
            'state'        => 'nullable|string|max:2',
            'zip_code'     => 'nullable|string|max:10',
        ], static::messages());

        return [
            'valid'  => $validator->passes(),
            'errors' => $validator->errors()->toArray(),
            'data'   => $data,
        ];
    }

    /**
     * Valida dados para atualização de customer.
     */
    public static function validateUpdate(array $data, int $id): array
    {
        if (isset($data['cnpj'])) {
            $data['cnpj'] = preg_replace('/\D/', '', $data['cnpj']);
        }

        $validator = Validator::make($data, [
            'company_name' => 'sometimes|string|max:255',
            'external_id'  => 'nullable|string|max:255|unique:customers,external_id,' . $id,
            'phone'        => 'nullable|string|max:30',
            'email'        => 'nullable|email|max:255',
            'cnpj'         => 'nullable|string|size:14|unique:customers,cnpj,' . $id,
            'address'      => 'nullable|string|max:255',
            'number'       => 'nullable|string|max:20',
            'city'         => 'nullable|string|max:100',
            'state'        => 'nullable|string|max:2',
            'zip_code'     => 'nullable|string|max:10',
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
            'company_name.required' => 'O nome da empresa é obrigatório.',
            'company_name.max'      => 'O nome da empresa deve ter no máximo 255 caracteres.',
            'cnpj.size'             => 'O CNPJ deve conter exatamente 14 dígitos.',
            'cnpj.unique'           => 'Este CNPJ já está cadastrado.',
            'email.email'           => 'O e-mail informado não é válido.',
            'external_id.unique'    => 'Este ID externo já está cadastrado.',
            'state.max'             => 'O estado deve conter no máximo 2 caracteres (sigla).',
        ];
    }
}
