<?php

namespace App\Repositories;

use App\Models\MultipleFieldsEquip;

class MultipleFieldsRepository extends BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new MultipleFieldsEquip();
    }

    public function storeMultipleFields(array $data)
    {
        return $this->model->create($data);
    }

    public function updateMultipleFields(array $data, $id)
    {
        return $this->update($data, $id);
    }
}
