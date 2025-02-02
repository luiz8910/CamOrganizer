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
        return $this->model->create($data);
    }

    public function updateAccessEquip(array $data, $id)
    {
        return $this->update($data, $id);
    }
}
