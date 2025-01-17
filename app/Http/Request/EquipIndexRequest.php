<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class EquipIndexRequest extends FormRequest{
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
        ];
    }
}
