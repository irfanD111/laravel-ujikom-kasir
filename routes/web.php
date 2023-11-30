<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\produkController;
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
Route::get('/logout-a',[adminController::class,'logout']);

Route::get('data-produk',[produkController::class,'data_p']);
Route ::get('/hapus-produk/{id}', [produkController::class,'hapus']);
Route ::get('/update-produk/{id}', [produkController::class, 'update']);
Route ::post('/update-produk/{id}', [produkController::class, 'proses_update']);
Route::get('/tambah-produk',[produkController::class, 'tambah_produk']);
Route::post('/tambah-produk', [produkController::class, 'proses_tambah_produk']);





