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

}
