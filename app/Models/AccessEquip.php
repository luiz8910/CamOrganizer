<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessEquip extends Model
{
    protected $table = 'access_equip';

    protected $fillable = [
        'username',
        'password',
        'group',
        'equip_id',
        'customer_id',
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equip_id');
    }
}
