<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'external_id', 'company_name', 'phone', 'email', 'cnpj',
        'address', 'number', 'city', 'state', 'zip_code', 'logo'
    ];

    /**
     * CNPJ formatado para exibição (00.000.000/0000-00).
     * Se já vier formatado ou não tiver 14 dígitos, retorna o valor original.
     */
    public function getCnpjFormattedAttribute(): ?string
    {
        $digits = preg_replace('/\D/', '', (string) $this->cnpj);

        if (strlen($digits) !== 14) {
            return $this->cnpj;
        }

        return preg_replace(
            '/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/',
            '$1.$2.$3/$4-$5',
            $digits
        );
    }
}
