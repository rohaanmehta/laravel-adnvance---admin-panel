<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Login extends BaseController
{
    function index(){
        return view('login');
    }
}