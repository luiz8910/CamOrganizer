<?php

namespace App\UseCases\Equipments;

use App\Repositories\DeviceRepository;
use App\Repositories\EquipmentRepository;

class GetEquipmentsUseCase
{
    private $equipmentRepository;
    private $deviceRepository;

    public function __construct()
    {
        $this->equipmentRepository = new EquipmentRepository();
        $this->deviceRepository = new DeviceRepository();
    }

    public function execute(int $customer_id)
    {
        $devices = $this->deviceRepository->getAllDevices();

        $device_names = [];

        foreach ($devices as $device) {
            $device_names[$device->id] = $device->name;
        }

        $equipmentCounts = $this->equipmentRepository->getEquipments($customer_id);

        foreach ($equipmentCounts as $equipmentCount) {
            $equipmentCount['device_name'] = $device_names[$equipmentCount->device_id];
        }

        return $equipmentCounts;
    }
}
