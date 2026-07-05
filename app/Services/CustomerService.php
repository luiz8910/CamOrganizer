<?php

namespace App\Services;

use App\Models\Customer;
use App\Repositories\CustomerRepository;
use App\Traits\UploadImage;

class CustomerService
{
    use UploadImage;

    protected CustomerRepository $repository;

    public function __construct()
    {
        $this->repository = new CustomerRepository();
    }

    /**
     * Cria um novo customer.
     */
    public function create(array $data): Customer
    {
        if (isset($data['logo']) && is_object($data['logo'])) {
            $data['logo'] = $this->uploadImage($data['logo']);
        } else {
            unset($data['logo']);
        }

        return $this->repository->createCustomer($data);
    }

    /**
     * Atualiza um customer existente.
     */
    public function update(array $data, int $id): ?Customer
    {
        if (isset($data['logo']) && is_object($data['logo'])) {
            $data['logo'] = $this->uploadImage($data['logo']);
        } else {
            unset($data['logo']);
        }

        return $this->repository->update($data, $id);
    }

    /**
     * Soft-delete de um customer.
     */
    public function delete(int $id): bool
    {
        return (bool) $this->repository->delete($id);
    }

    /**
     * Busca customer por ID.
     */
    public function find(int $id): ?Customer
    {
        return $this->repository->find($id);
    }

    /**
     * Busca customer por CNPJ (somente dígitos).
     */
    public function findByCnpj(string $cnpj): ?Customer
    {
        $cnpj = preg_replace('/\D/', '', $cnpj);

        // Compara somente dígitos dos dois lados: o CNPJ pode estar armazenado
        // formatado (12.345.678/0001-99) ou apenas com dígitos, dependendo de
        // como o cliente foi cadastrado (formulário x IA).
        return Customer::whereRaw(
            "REPLACE(REPLACE(REPLACE(REPLACE(cnpj, '.', ''), '/', ''), '-', ''), ' ', '') = ?",
            [$cnpj]
        )->first();
    }

    /**
     * Busca customers por nome (parcial).
     */
    public function searchByName(string $name): \Illuminate\Database\Eloquent\Collection
    {
        return Customer::where('company_name', 'like', "%{$name}%")->get();
    }

    /**
     * Verifica se CNPJ existe (para unicidade).
     */
    public function cnpjExists(string $cnpj, ?int $excludeId = null): bool
    {
        $query = Customer::where('cnpj', preg_replace('/\D/', '', $cnpj));
        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }
        return $query->exists();
    }

    /**
     * Lista todos os customers.
     */
    public function list()
    {
        return $this->repository->getCustomers();
    }
}
