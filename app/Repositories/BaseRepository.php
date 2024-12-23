<?php

namespace App\Repositories;

class BaseRepository
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function all($orderBy = null, $order = null)
    {
        $orderBy = $orderBy ?? 'created_at';
        $order = $order ?? 'desc';
        return $this->model->orderBy($orderBy, $order)->get();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $model = $this->model->find($id);

        if ($model) {
            $model->update($data);
            return $model;
        }

        return null;
    }

    public function delete($id)
    {
        $model = $this->model->find($id);

        if ($model) {
            return $model->delete();
        }

        return false;
    }
}
