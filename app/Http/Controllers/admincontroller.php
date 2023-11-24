<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function index(){
        return view("login-admin");
    }

    function proses_login(request $request){
        $datalogin = $request->only("username","password");
        if (Auth::guard("admin")->attempt($datalogin)) {
            return redirect('/home/admin');
        }else{
            return redirect('/login/admin')->with("salah","username atau password salah");
        }

    }

    function logout(){
        Auth::guard('admin')->logout();

        return redirect('/login/admin');
    }
}
