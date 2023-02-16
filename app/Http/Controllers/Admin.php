<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Admin extends BaseController
{
    public function view(){
        $user = session()->get('userID');
        if($user != ''){
            return redirect(url('/admin'));
        }else{
            return view('admin/AdminLogin');
        }
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function login(){
        $users =DB::table('users')->where('email', $_POST['username'])->where('password',$_POST['password'])->first();
        $users = json_decode(json_encode($users),true);
        // $settings =DB::table('settings')->where('userID', $users['id'])->first();
        // $settings = json_decode(json_encode($settings),true);
        if(isset($users['id']) && !empty($users['id'])){
            $data['result'] = '400';
            session()->put('userID',$users['id']);
            session()->put('user',$users['firstname'].' '.$users['lastname']);
            // echo 'sessioncheck ';print_r($test);
            // session()->put('darkmode',$settings['darkmode']);
        }else{
            $data['result'] = '200';
        }
        return $data;
    }
    public function logout(){
        session()->flush();
        return 'logout';
    }
}