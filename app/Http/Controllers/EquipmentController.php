<?php

namespace App\Http\Controllers;

use App\Http\Request\EquipIndexRequest;
use App\Http\Request\EquipRequest;
use App\UseCases\Equipments\GetCountEquipmentsUseCase;
use App\UseCases\Customer\CustomerUseCase;

class EquipmentController extends AppBaseController
{
    private $equipmentUseCase;
    private $customerUseCase;

    public function __construct()
    {
        $this->equipmentUseCase = new GetCountEquipmentsUseCase();
        $this->customerUseCase = new CustomerUseCase();
    }

    public function index(EquipIndexRequest $request)
    {
        $equipments = $this->equipmentUseCase->execute($request->customer_id);

        $route = 'equipments.index';

        return $this->render(['route' => $route, 'equipments' => $equipments]);
    }

    public function create(int $customerId)
    {
        $route = 'equipments.create';

        $customer = $this->customerUseCase->show($customerId);

        dd($customer);

        return $this->render(['route' => $route, 'customer' => $customer]);
    }

    public function store(EquipRequest $request)
    {

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
