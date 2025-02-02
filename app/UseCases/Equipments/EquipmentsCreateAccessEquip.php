<?php

namespace App\UseCases\Equipments;

use App\Repositories\AccessEquipRepository;

class EquipmentsCreateAccessEquip
{
    private $accessEquipRepository;

    public function __construct()
    {
        $this->accessEquipRepository = new AccessEquipRepository();
    }

    public function execute(array $data, int $equipId)
    {
        try {

            $accessEquip = [];

            foreach ($data['access_equip']['username'] as $key => $value) {
                $accessEquip[$key]['username'] = $value;
            }

            foreach ($data['access_equip']['password'] as $key => $value) {
                $accessEquip[$key]['password'] = $value;
            }

            foreach ($data['access_equip']['role'] as $key => $value) {
                $accessEquip[$key]['role'] = $value;
            }


            foreach ($accessEquip as $item) {
                $item['equip_id'] = $equipId;
                $item['customer_id'] = $data['customer_id'];

                $this->accessEquipRepository->storeAccessEquip($item);
            }

            return true;

        }catch (\Exception $e) {

            dd($e);
            throw new \Exception('Erro ao cadastrar equipamento');

        }
    }
}
