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

    public function getCustomers()
    {
        return $this->all();
    }

    public function verifyCnpj($cnpj)
    {
        return (bool)$this->where('cnpj', $cnpj)->first();
    }

    public function verifyExternalId($externalId)
    {
        return (bool)$this->where('external_id', $externalId)->first();
    }
}
