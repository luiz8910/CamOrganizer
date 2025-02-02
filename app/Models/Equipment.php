<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'equipments';

    protected $fillable = [
        'brand',
        'model',
        'customer_id',
        'device_id',
        'serial',
        'status',
        'port',
        'email',
        'phone',
        'ddns',
        'access_ip',
        'hd_brand',
        'storage_capacity',
        'installation_location',
        'description',
        'network',
        'network_add',
        'access_equip'
    ];

    public function specific()
    {
        return $this->morphTo();
    }

    public function access()
    {
        return $this->hasMany(AccessEquip::class, 'equip_id');
    }

    public function network()
    {
        return $this->hasMany(MultipleFieldsEquip::class, 'equip_id');
    }
}
