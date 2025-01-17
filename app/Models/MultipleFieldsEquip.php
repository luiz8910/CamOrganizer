<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MultipleFieldsEquip extends Model
{
    use HasFactory;

    protected $table = 'multiple_fields_equips';

    protected $fillable = [
        'device_id',
        'customer_id',
        'mac',
        'ip',
        'mask',
        'gateway',
    ];
}
