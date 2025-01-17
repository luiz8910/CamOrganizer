<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessEquip extends Model
{
    protected $table = 'access_equip';

    protected $fillable = [
        'user',
        'password',
        'group',
        'equip_id',
        'customer_id',
    ];
}
