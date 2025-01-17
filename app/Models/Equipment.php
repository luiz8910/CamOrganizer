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
    ];

    public function specific()
    {
        return $this->morphTo();
    }
}
