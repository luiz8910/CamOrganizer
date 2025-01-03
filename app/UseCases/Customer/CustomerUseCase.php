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

    public function list()
    {
        return $this->repository->getCustomers();
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function store($data)
    {
        if(isset($data['logo'])){
            $path = $data['logo']->store('images', 'public');
            $data['logo'] = $path;
        }

        return $this->repository->createCustomer($data);
    }

    public function update($data, $id)
    {
        if(isset($data['logo'])){
            $path = $data['logo']->store('images', 'public');
            $data['logo'] = $path;
        }

        return $this->repository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
