<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = Customer::class;
    }

    public function createCustomer(array $data)
    {
        return $this->create($data);
    }
}
