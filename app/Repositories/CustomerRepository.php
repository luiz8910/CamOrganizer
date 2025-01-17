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

    public function verifyCnpj(string $cnpj)
    {
        return (bool)$this->first(['cnpj' => $cnpj]);
    }

    public function verifyExternalId(string $externalId)
    {
        return (bool)$this->first(['external_id' => $externalId]);
    }
}
