<?php

namespace App\Http\Controllers;

class MainController extends AppBaseController
{
    public function main()
    {
        dd('Logging is not working, and this message confirms it.');
        return $this->render([]);
    }
}
