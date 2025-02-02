<?php

namespace App\UseCases\Equipments;

use App\Repositories\EquipmentRepository;

class EquipmentsUseCase
{
    private $equipmentsRepository;
    private $multipleFieldsUseCaseCreate;

    private $accessEquipUseCase;

    public function __construct()
    {
        $this->equipmentsRepository = new EquipmentRepository();
        $this->multipleFieldsUseCaseCreate = new EquipmentsCreateMultipleFieldsUseCase();
        $this->accessEquipUseCase = new EquipmentsCreateAccessEquip();
    }

    public function store(array $data)
    {
        try {

            $equip = $this->equipmentsRepository->store($data);

            if (isset($data['network'])){
                $this->multipleFieldsUseCaseCreate->execute($data, $equip->id);
            }

            if(isset($data['access_equip'])){
                $this->accessEquipUseCase->execute($data, $equip->id);
            }

            return $data;

        }catch (\Exception $e) {

            dd($e);
            //throw new \Exception('Erro ao cadastrar equipamento');

        }
    }
}
