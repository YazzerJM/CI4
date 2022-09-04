<?php

namespace App\Controllers;

use App\Libraries\Codigo;

class Home extends BaseController
{
    public function index()
    {
        $inst = new Codigo();
        $inst->sayHola();
        return view('welcome_message');
    }
}
