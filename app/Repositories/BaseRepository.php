<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class BaseRepository
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function all($orderBy = null, $order = null, array $select = ['*'])
    {
        $orderBy = $orderBy ?? 'created_at';
        $order = $order ?? 'desc';
        return $this
            ->model
            ->select($select)
            ->orderBy($orderBy, $order)
            ->get();
    }

    public function find(int $id, array $select = ['*'])
    {
        return $this->model->select($select)->find($id);
    }

    public function where(array $where,
                          string $order_column = 'created_at',
                          string $order = 'desc',
                          array $select = ['*'])
    {
        return $this
            ->model
            ->select($select)
            ->where($where)
            ->orderBy($order_column, $order)
            ->get();
    }

    public function whereCountGroupBy(array $where,
                                 string $order_column = 'created_at',
                                 string $order = 'desc',
                                 string $groupBy = 'id')
    {
        return $this
            ->model
            ->select($groupBy, DB::raw('COUNT(*) as total_count'), DB::raw("MAX(created_at) as latest_$order_column"))
            ->where($where)
            ->orderBy("latest_$order_column", $order)
            ->groupBy($groupBy)
            ->get();
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

    public function delete(int $id)
    {
        $model = $this->model->find($id);

        if ($model) {
            return $model->delete();
        }

        return false;
    }

    public function first(array $data, array $select = ['*'])
    {
        return $this->model->select($select)->where($data)->first();
    }

    public function deleteWhere(string $column, string $value)
    {
        return $this->model->where($column, $value)->delete();
    }
}
