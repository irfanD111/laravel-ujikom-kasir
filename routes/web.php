<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\adminController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[PetugasController::class,'login'])->name('login');
Route::post('/login',[PetugasController::class,'proses_login']);
Route::get('/logout',[PetugasController::class,'logout']);
Route::get('/home', function () {
    return view('home');
});
Route::get('/login/admin',[PetugasController::class,'index']);
Route::post('/login/admin',[PetugasController::class,'proses_login']);

