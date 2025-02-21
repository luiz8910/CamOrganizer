<?php

namespace App\Http\Controllers;

use App\Traits\Environment;

class AppBaseController extends Controller
{
    use Environment;
    public function render($data)
    {
        $data['app_url'] = $this->getEnvJsonValue('env.app_url') ?? "https://teste.jf.tec.br/public/";

        return view('main', $data);
    }
}
