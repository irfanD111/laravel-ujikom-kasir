<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class PetugasController extends Controller
{
    function login(){
        return view ("/login");
    }

    function proses_login(request $request){
        $datalogin = $request->only("username","password");
        if (Auth::attempt($datalogin)) {
           return redirect('/home');
        }else{
           return redirect('/login')->with("salah","username atau password salah");
        }

    }

    function logout(){
        Auth::logout();

        return redirect('/login');
    }   
}
