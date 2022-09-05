<?php

namespace App\Controllers\Front;

use App\Libraries\Codigo;
use App\Controllers\BaseController;
    
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function sayHola(){
        $inst = new Codigo();
        $inst->sayHola();
    }
}
