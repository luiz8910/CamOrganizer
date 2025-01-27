<?php

namespace App\Traits;

use App\Repositories\DeviceRepository;
trait GetDeviceNamesTrait
{
    protected $deviceRepository;

    public function getDevices()
    {
        if (!$this->deviceRepository) {
            $this->deviceRepository = app(DeviceRepository::class);
        }

        $devices = $this->deviceRepository->all();

        $device_names = [];

        foreach ($devices as $device) {
            $device_names[$device->id] = [
                'id' => $device->id,
                'name' => $device->name,
                'icon' => $device->icon,
            ];
        }

        return $device_names;
    }
}
