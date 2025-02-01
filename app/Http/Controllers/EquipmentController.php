<?php

namespace App\Http\Controllers;

use App\Http\Request\EquipIndexRequest;
use App\Http\Request\EquipRequest;
use App\UseCases\Equipments\EquipmentsUseCase;
use App\UseCases\Equipments\GetCountEquipmentsUseCase;
use App\UseCases\Customer\CustomerUseCase;

class EquipmentController extends AppBaseController
{
    private $countEquipmentsUseCase;
    private $customerUseCase;

    private $equipmentsUseCase;

    public function __construct()
    {
        $this->countEquipmentsUseCase = new GetCountEquipmentsUseCase();
        $this->customerUseCase = new CustomerUseCase();
        $this->equipmentsUseCase = new EquipmentsUseCase();
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
            dd($request->all());
            $this->equipmentsUseCase->store($request->validated());

            return redirect()->route('equipments.index', ['customer_id' => $request->customer_id]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao cadastrar equipamento');
        }

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
