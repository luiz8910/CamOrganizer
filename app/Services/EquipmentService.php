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

    /**
     * Procura um equipamento já cadastrado com o mesmo serial no cliente.
     *
     * Escopo por cliente: o serial é único dentro do mesmo cliente.
     * Registros soft-deletados são ignorados automaticamente.
     *
     * @param  int|null  $exceptId  ID a ignorar (o próprio registro, em updates)
     */
    public function findDuplicateSerial(int $customerId, string $serial, ?int $exceptId = null): ?Equipment
    {
        return $this->duplicateQuery($customerId, $exceptId)
            ->where('serial', $serial)
            ->first();
    }

    /**
     * Procura um equipamento já cadastrado com o mesmo IP de acesso no cliente.
     *
     * O IP pode se repetir entre clientes distintos, por isso o escopo é
     * sempre o mesmo cliente. Registros soft-deletados são ignorados.
     *
     * @param  int|null  $exceptId  ID a ignorar (o próprio registro, em updates)
     */
    public function findDuplicateAccessIp(int $customerId, string $accessIp, ?int $exceptId = null): ?Equipment
    {
        return $this->duplicateQuery($customerId, $exceptId)
            ->where('access_ip', $accessIp)
            ->first();
    }

    /**
     * Query base para checagem de duplicidade, escopada ao cliente e
     * opcionalmente excluindo o próprio registro (em updates).
     */
    protected function duplicateQuery(int $customerId, ?int $exceptId)
    {
        $query = Equipment::where('customer_id', $customerId);

        if ($exceptId) {
            $query->where('id', '!=', $exceptId);
        }

        return $query;
    }
}
