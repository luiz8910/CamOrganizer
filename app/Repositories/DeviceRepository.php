<?php

namespace App\Repositories;

use App\Models\Device;

class DeviceRepository extends BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Device();
    }

    public function getAllDevices()
    {
        return $this->all();
    }
}
