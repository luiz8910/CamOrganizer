<?php

namespace App\UseCases\Equipments;

use App\Repositories\AccessEquipRepository;

class EquipmentsCreateAccessEquipUseCase
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
                $accessEquip[] = [
                    'id' => $data['access_equip']['id'][$key] ?? null,
                    'username' => $value,
                    'password' => $data['access_equip']['password'][$key],
                    'group' => $data['access_equip']['group'][$key],
                    'equip_id' => $equipId,
                    'customer_id' => $data['customer_id'],
                ];
            }

            foreach ($accessEquip as $item) {
                if (!empty($item['id']) && is_numeric($item['id'])) {
                    $this->accessEquipRepository->updateAccessEquip($item, (int) $item['id']);
                } else {
                    $this->accessEquipRepository->storeAccessEquip($item);
                }
            }

            return true;

        } catch (\Exception $e) {

            throw new \Exception($e->getMessage());
        }
    }

}
