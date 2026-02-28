<?php

namespace App\Services;

use App\Models\Equipment;
use App\Repositories\EquipmentRepository;
use App\UseCases\Equipments\EquipmentsCreateMultipleFieldsUseCase;
use App\UseCases\Equipments\EquipmentsCreateAccessEquipUseCase;
use App\UseCases\Equipments\EquipmentsDeleteMultipleFieldsUseCase;
use App\UseCases\Equipments\EquipmentsDeleteAccessEquipUseCase;

class EquipmentService
{
    protected EquipmentRepository $repository;

    public function __construct()
    {
        $this->repository = new EquipmentRepository();
    }

    /**
     * Cria um novo equipment (MVP: sem multiple_fields/access).
     */
    public function create(array $data): Equipment
    {
        $equip = $this->repository->store($data);

        // Cascading para sub-tabelas (se fornecidos)
        if (isset($data['network'])) {
            (new EquipmentsCreateMultipleFieldsUseCase())->execute($data, $equip->id);
        }
        if (isset($data['access_equip'])) {
            (new EquipmentsCreateAccessEquipUseCase())->execute($data, $equip->id);
        }

        return $equip;
    }

    /**
     * Atualiza um equipment existente.
     */
    public function update(array $data, int $id): bool
    {
        $this->repository->update($data, $id);

        // Re-cria sub-tabelas se fornecidos
        (new EquipmentsDeleteMultipleFieldsUseCase())->execute($id);
        if (isset($data['network'])) {
            (new EquipmentsCreateMultipleFieldsUseCase())->execute($data, $id);
        }
        if (isset($data['access_equip'])) {
            (new EquipmentsCreateAccessEquipUseCase())->execute($data, $id);
        }

        return true;
    }

    /**
     * Soft-delete de um equipment (com cascade em sub-tabelas).
     */
    public function delete(int $id): bool
    {
        (new EquipmentsDeleteAccessEquipUseCase())->execute($id);
        (new EquipmentsDeleteMultipleFieldsUseCase())->execute($id);
        $this->repository->destroy($id);

        return true;
    }

    /**
     * Busca equipment por ID.
     */
    public function find(int $id): ?Equipment
    {
        return $this->repository->show($id);
    }
}
