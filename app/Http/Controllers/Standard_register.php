<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Standard_register extends BaseController
{
    function index(){
        return view('standard_register');
    }
}