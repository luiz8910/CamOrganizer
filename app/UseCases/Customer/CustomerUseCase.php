<?php

namespace App\UseCases\Customer;

use App\Repositories\CustomerRepository;

class CustomerUseCase
{
    private CustomerRepository $repository;


    public function __construct()
    {
        $this->repository = new CustomerRepository();
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }
}
