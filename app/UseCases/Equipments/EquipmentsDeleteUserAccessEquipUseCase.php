<?php

namespace App\UseCases\Equipments;

use App\Repositories\AccessEquipRepository;

class EquipmentsDeleteUserAccessEquipUseCase
{
    private AccessEquipRepository $accessEquipRepository;

    public function __construct()
    {
        $this->accessEquipRepository = new AccessEquipRepository();
    }

    public function execute(int $id)
    {
        try {

            $this->accessEquipRepository->deleteUser($id);

            return true;

        }catch (\Exception $e) {

            dd($e);
            throw new \Exception('Erro ao deletar equipamento');

        }
    }
}
