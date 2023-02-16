<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Home extends BaseController
{
    function index(){
        // session()->put('key', 'rohaan');  
        // $ses = session()->get('key');
        // print_r($ses);exit;
        return view('index');
    }
}