<?php

namespace App\Http\Controllers;

class AppBaseController extends Controller
{
    public function render($data)
    {
        $data['app_url'] = config('app.url');

        return view('main', $data);
    }
}
