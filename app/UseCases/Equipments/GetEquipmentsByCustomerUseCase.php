<?php

namespace App\UseCases\Equipments;

use App\Repositories\EquipmentRepository;
use App\Traits\GetDeviceNamesTrait;

class GetEquipmentsByCustomerUseCase
{
    use GetDeviceNamesTrait;
    protected $equipmentRepository;

    protected $deviceRepository;

    public function __construct()
    {
        $this->equipmentRepository = new EquipmentRepository();
    }

    public function execute(int $customer_id)
    {
        $device_names = $this->getDevices();

        $equipments = $this->equipmentRepository->getEquipments($customer_id);

        foreach ($equipments as $equipment) {
            $equipment->device_name = $device_names[$equipment->device_id];
        }

        return $equipments;
    }
}
