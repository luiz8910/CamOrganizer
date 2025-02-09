<?php

namespace App\Repositories;

use App\Models\Equipment;

class EquipmentRepository extends BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Equipment();
    }

    public function getEquipmentsCount(int $customer_id)
    {
        return $this->whereCountGroupBy(
            where:[
                'status' => 'active',
                'customer_id' => $customer_id
            ],
            groupBy: 'device_id');
    }

    public function getSpecificEquipments(int $customer_id, int $device_id)
    {
        return $this->where([
            'status' => 'active',
            'customer_id' => $customer_id,
            'device_id' => $device_id
        ]);
    }

    public function getEquipments(int $customer_id)
    {
        return $this->where([
            'status' => 'active',
            'customer_id' => $customer_id
        ]);
    }

    public function show($id)
    {
        return $this->find($id);
    }

    public function store($data)
    {
        unset($data['network']);
        unset($data['network_add']);
        unset($data['access_equip']);

        return $this->create($data);
    }

    public function update($data, $id)
    {
        return $this->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->delete($id);
    }
}
