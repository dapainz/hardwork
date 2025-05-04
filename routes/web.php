<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\tugasController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// auth
Route::middleware('isLogin')->group(function(){
    Route::post('login',[AuthController::class,'loginPost'])->name('loginPost');
    Route::get('login',[AuthController::class,'login'])->name('login');

});

// logout
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('cekLogin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('tugas',[tugasController::class,'index'])->name('tugas');

    Route::middleware('isAdmin')->group(function(){
        // user
        Route::get('user',[UserController::class,'index'])->name('user');
        Route::get('user/buat',[UserController::class,'buat'])->name('tambahUser');
        Route::post('user/store',[UserController::class,'store'])->name('userStore');
        Route::get('user/update/{id}',[UserController::class,'update'])->name('updateUser');
        Route::post('user/edit/{id}',[UserController::class,'edit'])->name('updateEdit');
        Route::delete('user/destroy/{id}',[UserController::class,'destroy'])->name('userDestroy');
        // tugas
        Route::get('tugas/create',[tugasController::class,'create'])->name('tugasCreate');
        Route::post('tugas/store',[tugasController::class,'store'])->name('tugasStore');
        Route::get('tugas/update/{id}',[tugasController::class,'edit'])->name('tugasEdit');
        Route::post('tugas/edit/{id}',[tugasController::class,'update'])->name('tugasUpdate');
        Route::delete('tugas/destroy/{id}',[tugasController::class,'destroy'])->name('tugasDestroy');
    });

    
});
