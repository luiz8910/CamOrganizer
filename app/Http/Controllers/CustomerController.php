<?php

namespace App\Http\Controllers;

use App\UseCases\Customer\CustomerUseCase;
use Illuminate\Http\Request;

class CustomerController extends AppBaseController
{
    private $customerUseCase;

    public function __construct()
    {
        $this->customerUseCase = new CustomerUseCase();
    }

    public function index()
    {
        $customers = $this->customerUseCase->list();

        $route = 'clientes.list';

        return $this->render(['route' => $route, 'customers' => $customers]);
    }

    public function show($id)
    {
        $customer = $this->customerUseCase->show($id);

        $route = 'clientes.show';

        return $this->render(['route' => $route, 'customer' => $customer]);
    }

    public function create()
    {
        $route = 'clientes.create';

        return $this->render(['route' => $route]);
    }

    public function store(Request $request)
    {
        $this->customerUseCase->store($request->all());

        return redirect()->route('clientes');
    }

    public function edit($id)
    {
        $route = 'clientes.create';

        $customer = $this->customerUseCase->show($id);

        return $this->render(['route' => $route, 'customer' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $this->customerUseCase->update($request->all(), $id);

        return redirect()->route('clientes');
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
