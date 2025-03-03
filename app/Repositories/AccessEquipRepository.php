<?php

namespace App\Repositories;

use App\Models\AccessEquip;

class AccessEquipRepository extends BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new AccessEquip();
    }

    public function storeAccessEquip(array $data)
    {
        return $this->create($data);
    }

    public function updateAccessEquip(array $data, $id)
    {
        return $this->update($data, $id);
    }

    public function deleteAccessEquip(int $equipId)
    {
        return $this->deleteWhere('equip_id', $equipId);
    }

    public function deleteUser(int $id)
    {
        return $this->delete($id);
    }
}
