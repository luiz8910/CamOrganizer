<?php

namespace App\UseCases\Equipments;

use App\Repositories\MultipleFieldsRepository;

class EquipmentsCreateMultipleFieldsUseCase
{
    private $multipleFieldsRepository;

    public function __construct()
    {
        $this->multipleFieldsRepository = new MultipleFieldsRepository();
    }

    public function execute(array $data, int $equipId)
    {
        try {

            if(isset($data['network_add'])){
                $data['network_add']['customer_id'] = $data['customer_id'];
                $data['network_add']['device_id'] = $data['device_id'];
                $data['network_add']['equip_id'] = $equipId;

                $this->multipleFieldsRepository->storeMultipleFields($data['network_add']);
            }

            $data['network']['customer_id'] = $data['customer_id'];
            $data['network']['device_id'] = $data['device_id'];
            $data['network']['equip_id'] = $equipId;

            $this->multipleFieldsRepository->storeMultipleFields($data['network']);

            return $data;

        }catch (\Exception $e) {

            throw new \Exception('Erro ao cadastrar equipamento');

        }
    }
}
