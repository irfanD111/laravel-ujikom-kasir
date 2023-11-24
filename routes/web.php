<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\adminController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login',[PetugasController::class,'login'])->name('login');
Route::post('/login',[PetugasController::class,'proses_login']);
Route::get('/logout',[PetugasController::class,'logout']);
Route::get('/tambah-petugas',[PetugasController::class,'tbuat']);
Route::post('/tambah-petugas',[PetugasController::class,'buat_akun']);

Route::get('/login/admin',[adminController::class,'index']);
Route::post('/login/admin',[adminController::class,'proses_login']);
Route::get('/tampilan/admin',[adminController::class,'tampilan_admin']);
Route::post('/tambah-admin',[adminController::class,'buat_akun']);
Route::get('/tambah-admin',[adminController::class, 'tbuat']);

Route::get('/nav', function () {
    return view('layout.navbar');
});

