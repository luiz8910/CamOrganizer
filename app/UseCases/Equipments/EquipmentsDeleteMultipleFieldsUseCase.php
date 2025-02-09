<?php

namespace App\UseCases\Equipments;

use App\Repositories\MultipleFieldsRepository;

class EquipmentsDeleteMultipleFieldsUseCase
{
    private MultipleFieldsRepository $repository;

    public function __construct()
    {
        $this->repository = new MultipleFieldsRepository();
    }

    public function execute(int $equipmentId)
    {
        return $this->repository->deleteMultipleFields($equipmentId);
    }
}
