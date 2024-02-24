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

    function tbuat(){
        return view("tambah_akun");
    }

    function buat_akun(request $request){
        $nama = $request->username;
        $user = $request->fn;
        $pass = $request->password;
        $role = $request->role;

        DB::table('petugas')->insert([
            
            'username' => $nama,
            'password' => Hash::make($pass),//hash
            'Fullname' => $user,
            'role' => $role,
        ]);
        return redirect('/login');
    }

    function proses_login(request $request){
        $datalogin = $request->only("username","password");
        if (Auth::attempt($datalogin)) {
           return redirect('/home')->with("nama",$request->username);
        }else{
           return redirect('/login')->with("salah","username atau password salah");
        }

    }

    function logout(){
        Auth::logout();

        return redirect('/login');
    }   


    function data(){
       $data = DB::table('petugas')->orderBy('role','asc')->orderBy('Fullname','asc')->get();



        return view('/data-karyawan',['data' => $data]);
    }
    }
