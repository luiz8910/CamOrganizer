<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository extends BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Customer();
    }

    public function createCustomer(array $data)
    {
        return $this->create($data);
    }
}
