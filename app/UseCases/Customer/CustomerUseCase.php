<?php

namespace App\UseCases\Customer;

use App\Repositories\CustomerRepository;
use App\Traits\UploadImage;
use App\Traits\Environment;
use App\UseCases\Equipments\GetEquipmentsUseCase;

class CustomerUseCase
{
    use UploadImage, Environment;
    private CustomerRepository $repository;

    private GetEquipmentsUseCase $equipmentUseCase;

    public function __construct()
    {
        $this->repository = new CustomerRepository();
        $this->equipmentUseCase = new GetEquipmentsUseCase();
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
            $data['logo'] = $this->uploadImage($data['logo']);
        }

        return $this->repository->createCustomer($data);
    }

    public function update($data, $id)
    {
        if(isset($data['logo'])){
            $data['logo'] = $this->uploadImage($data['logo']);
        }

        return $this->repository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function verifyCnpj($cnpj)
    {
        return $this->repository->verifyCnpj($cnpj);
    }

    public function verifyExternalId($externalId)
    {
        return $this->repository->verifyExternalId($externalId);
    }
}
