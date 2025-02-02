<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
        ];
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
