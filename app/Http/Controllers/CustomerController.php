<?php

namespace App\Http\Controllers;

use App\UseCases\Customer\CustomerUseCase;
use App\UseCases\Equipments\GetEquipmentsUseCase;
use Illuminate\Http\Request;

class CustomerController extends AppBaseController
{
    private $customerUseCase;

    private $equipmentUseCase;

    public function __construct()
    {
        $this->customerUseCase = new CustomerUseCase();
        $this->equipmentUseCase = new GetEquipmentsUseCase();
    }

    public function index()
    {
        $customers = $this->customerUseCase->list();

        $route = 'customers.list';

        return $this->render(['route' => $route, 'customers' => $customers]);
    }

    public function show($id)
    {
        $customer = $this->customerUseCase->show($id);

        $equipments = $this->equipmentUseCase->execute($id);

        $route = 'customers.show';

        return $this->render([
            'route' => $route,
            'customer' => $customer,
            'equipments' => $equipments
        ]);
    }

    public function create()
    {
        $route = 'customers.create';

        return $this->render(['route' => $route]);
    }

    public function store(Request $request)
    {
        $this->customerUseCase->store($request->all());

        return redirect()->route('customers');
    }

    public function edit($id)
    {
        $route = 'customers.create';

        $customer = $this->customerUseCase->show($id);

        return $this->render(['route' => $route, 'customer' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $this->customerUseCase->update($request->all(), $id);

        return redirect()->route('customers');
    }

    public function destroy($id)
    {
        return $this->customerUseCase->delete($id);
    }

    public function verifyCnpj(Request $request)
    {
        $cnpj = $request->input('cnpj');

        $response = $this->customerUseCase->verifyCnpj($cnpj);

        return response()->json(['exists' => $response]);
    }

    public function verifyExternalId(Request $request)
    {
        $externalId = $request->input('external_id');

        $response = $this->customerUseCase->verifyExternalId($externalId);

        return response()->json(['exists' => $response]);
    }
}
