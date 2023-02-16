<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class About extends BaseController
{
    function index(){
        return view('aboutus');
    }
}