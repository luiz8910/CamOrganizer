<?php

namespace App\UseCases\Equipments;

use App\Repositories\DeviceRepository;
use App\Repositories\EquipmentRepository;
use App\Traits\GetDeviceNamesTrait;

class GetCountEquipmentsUseCase
{
    use GetDeviceNamesTrait;
    private $equipmentRepository;

    public function __construct()
    {
        $this->equipmentRepository = new EquipmentRepository();
    }

    public function execute(int $customer_id)
    {
        $device_names = $this->getDevices();

        $equipmentCounts = $this->equipmentRepository->getEquipmentsCount($customer_id);

        foreach ($equipmentCounts as $equipmentCount) {
            $equipmentCount['device_name'] = $device_names[$equipmentCount->device_id];
        }

        return $equipmentCounts;
    }
}
