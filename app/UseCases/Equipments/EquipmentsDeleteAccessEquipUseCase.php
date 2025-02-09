<?php

namespace App\UseCases\Equipments;

use App\Repositories\AccessEquipRepository;

class EquipmentsDeleteAccessEquipUseCase
{
    private AccessEquipRepository $accessEquipRepository;

    public function __construct()
    {
        $this->accessEquipRepository = new AccessEquipRepository();
    }

    public function execute(int $equipId)
    {
        try {

            $this->accessEquipRepository->deleteAccessEquip($equipId);

            return true;

        }catch (\Exception $e) {

            dd($e);
            throw new \Exception('Erro ao deletar equipamento');

        }
    }
}
