<?php

namespace App\Http\Controllers;

class AppBaseController extends Controller
{
    public function render($data)
    {
        return view('main', $data);
    }
}
