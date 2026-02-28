<?php

namespace App\UseCases\Equipments;

use App\Repositories\EquipmentRepository;
use App\Models\Wifi;

class EquipmentsUseCase
{
    private $equipmentsRepository;
    private $multipleFieldsUseCaseCreate;

    private $accessEquipUseCase;

    private $multipleFieldsUseCaseDelete;


    public function __construct()
    {
        $this->equipmentsRepository = new EquipmentRepository();
        $this->multipleFieldsUseCaseCreate = new EquipmentsCreateMultipleFieldsUseCase();
        $this->accessEquipUseCase = new EquipmentsCreateAccessEquipUseCase();
        $this->multipleFieldsUseCaseDelete = new EquipmentsDeleteMultipleFieldsUseCase();

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

            if(!empty($data['wifi_ssid']) || !empty($data['wifi_password'])){
                Wifi::create([
                    'ssid' => $data['wifi_ssid'] ?? null,
                    'password' => $data['wifi_password'] ?? null,
                    'customer_id' => $data['customer_id'],
                    'equip_id' => $equip->id,
                ]);
            }

            return $data;

        }catch (\Exception $e) {

            dd($e);
            //throw new \Exception('Erro ao cadastrar equipamento');

        }
    }

    public function destroy(int $id)
    {
        $accessEquipUseCase = new EquipmentsDeleteAccessEquipUseCase();

        $multipleFieldsUseCase = new EquipmentsDeleteMultipleFieldsUseCase();

        try {
            $accessEquipUseCase->execute($id);

            $multipleFieldsUseCase->execute($id);

            Wifi::where('equip_id', $id)->delete();

            $this->equipmentsRepository->destroy($id);

            return true;
        }catch (\Exception $e) {
            dd($e);
            //throw new \Exception('Erro ao deletar equipamento');
        }
    }

    public function update(array $data, $id)
    {
        try {

            $this->equipmentsRepository->update($data, $id);

            $this->multipleFieldsUseCaseDelete->execute($id);

            if (isset($data['network'])){
                $this->multipleFieldsUseCaseCreate->execute($data, $id);
            }

            if(isset($data['access_equip'])){
                $this->accessEquipUseCase->execute($data, $id);
            }

            if(!empty($data['wifi_ssid']) || !empty($data['wifi_password'])){
                Wifi::updateOrCreate(
                    ['equip_id' => $id],
                    [
                        'ssid' => $data['wifi_ssid'] ?? null,
                        'password' => $data['wifi_password'] ?? null,
                        'customer_id' => $data['customer_id'],
                    ]
                );
            } else {
                Wifi::where('equip_id', $id)->delete();
            }

            return $data;

        }catch (\Exception $e) {

            dd($e);
            //throw new \Exception('Erro ao atualizar equipamento');

        }
    }
}
