<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::prefix('auth')->group(function(){

    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::get('register',[AuthController::class,'register'])->name('register');

    Route::post('login',[AuthController::class,'loginUser'])->name('login.handle');
    Route::post('register',[AuthController::class,'registerUser'])->name('register.handle');

    Route::post('logout',[AuthController::class,'logout'])->name('logout');

});



Route::name('admin.')->middleware('auth')->prefix('admin')->group(function(){

    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    

});