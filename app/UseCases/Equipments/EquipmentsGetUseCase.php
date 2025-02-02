<?php

namespace App\UseCases\Equipments;

use App\Repositories\EquipmentRepository;

class EquipmentsGetUseCase
{
    private $equipmentsRepository;

    public function __construct()
    {
        $this->equipmentsRepository = new EquipmentRepository();
    }

    public function execute($equipId)
    {
        try {

            return $this->equipmentsRepository->show($equipId);

        }catch (\Exception $e) {

            dd($e);
            throw new \Exception('Erro ao buscar equipamento');

        }
    }
}
