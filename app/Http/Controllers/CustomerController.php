<?php

namespace App\Http\Controllers;

use App\UseCases\Customer\CustomerUseCase;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customerUseCase;

    public function __construct()
    {
        $this->customerUseCase = new CustomerUseCase();
    }

    public function index()
    {
        $route = 'clientes.list';

        return view('main', compact('route'));
    }

    public function show($id)
    {
        $customer = $this->customerUseCase->show($id);

        $route = 'clientes.show';

        return view('main', compact('route', 'customer'));
    }

    public function create()
    {

    }
}
