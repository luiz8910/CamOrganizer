<?php

namespace App\UseCases\Equipments;

use App\Repositories\EquipmentRepository;

class EquipmentsUseCase
{
    private $equipmentsRepository;

    public function __construct()
    {
        $this->equipmentsRepository = new EquipmentRepository();
    }

    public function store(array $data)
    {
        dd($data);
        return $this->equipmentsRepository->store($data);
    }
}
