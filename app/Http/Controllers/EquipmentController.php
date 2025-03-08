<?php

namespace App\Http\Controllers;

use App\Http\Request\EquipIndexRequest;
use App\Http\Request\EquipRequest;
use App\UseCases\Equipments\EquipmentsDeleteAccessEquipUseCase;
use App\UseCases\Equipments\EquipmentsDeleteUserAccessEquipUseCase;
use App\UseCases\Equipments\EquipmentsGetUseCase;
use App\UseCases\Equipments\EquipmentsUseCase;
use App\UseCases\Equipments\GetCountEquipmentsUseCase;
use App\UseCases\Customer\CustomerUseCase;


class EquipmentController extends AppBaseController
{
    private $countEquipmentsUseCase;
    private $customerUseCase;

    private $equipmentsUseCase;

    private $equipmentsGetUseCase;

    private $accessEquipUseCaseDelete;

    public function __construct()
    {
        $this->countEquipmentsUseCase = new GetCountEquipmentsUseCase();
        $this->customerUseCase = new CustomerUseCase();
        $this->equipmentsUseCase = new EquipmentsUseCase();
        $this->equipmentsGetUseCase = new EquipmentsGetUseCase();
        $this->accessEquipUseCaseDelete = new EquipmentsDeleteUserAccessEquipUseCase();
    }

    public function index(EquipIndexRequest $request)
    {
        $equipments = $this->countEquipmentsUseCase->execute($request->customer_id);

        $route = 'equipments.index';

        return $this->render(['route' => $route, 'equipments' => $equipments]);
    }

    public function create(int $customerId, int $device_id)
    {
        $route = 'equipments.create';

        $customer = $this->customerUseCase->show($customerId);

        return $this->render(['route' => $route, 'customer' => $customer, 'device_id' => $device_id]);
    }

    public function store(EquipRequest $request)
    {
        try {

            $this->equipmentsUseCase->store($request->validated());

            return redirect()->route('customers.show', ['id' => $request->customer_id]);
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Erro ao cadastrar equipamento');
        }

    }

    public function edit(int $equipId)
    {
        $route = 'equipments.create';

        $equipment = $this->equipmentsGetUseCase->execute($equipId);

        $customer = $this->customerUseCase->show($equipment['customer_id']);

        return $this->render([
            'route' => $route,
            'customer' => $customer,
            'device_id' => $equipment['device_id'],
            'equipment' => $equipment,
            'edit' => true
        ]);
    }

    public function update(EquipRequest $request, $id)
    {
        dd($request->all());
        try {
            $this->equipmentsUseCase->update($request->validated(), $id);

            return redirect()->route('customers.show', ['id' => $request->customer_id]);
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Erro ao atualizar equipamento');
        }
    }

    public function destroy($id)
    {
        return $this->equipmentsUseCase->destroy($id);
    }

    public function destroyUserAccess(int $id)
    {
        $this->accessEquipUseCaseDelete->execute($id);
    }
}
