<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'external_id', 'company_name', 'phone', 'email', 'cnpj'
    ];

}
