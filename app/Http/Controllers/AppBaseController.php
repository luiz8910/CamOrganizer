<?php

namespace App\Http\Controllers;

class AppBaseController extends Controller
{
    public function render($data)
    {
        $data['env'] = config('app.env');

        return view('main', $data);
    }
}
