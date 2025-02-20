<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccessEquip extends Model
{
    use SoftDeletes;

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
