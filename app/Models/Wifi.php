<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    use HasFactory;

    protected $table = 'wifi';

    protected $fillable = [
        'ssid',
        'password',
        'description',
        'customer_id',
        'equip_id',
    ];
}
