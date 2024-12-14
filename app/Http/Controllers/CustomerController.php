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
        $route = 'clientes.list';

        return $this->render(['route' => $route]);
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
        dd($request->all(), $request->file('logo'));

        $route = 'clientes.list';

        return $this->render(['route' => $route]);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}