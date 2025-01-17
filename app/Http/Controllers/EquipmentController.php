<?php

namespace App\Http\Controllers;

use App\Http\Request\EquipIndexRequest;
use App\UseCases\Equipments\GetEquipmentsUseCase;

class EquipmentController extends AppBaseController
{
    private GetEquipmentsUseCase $equipmentUseCase;

    public function index(EquipIndexRequest $request)
    {
        $equipments = $this->equipmentUseCase->execute($request->customer_id);

        $route = 'equipments.list';

        return $this->render(['route' => $route, 'equipments' => $equipments]);
    }

    public function create()
    {

    }

    public function store()
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
