<?php

use App\Http\Controllers\admin\Auth\loginController;
use App\Http\Controllers\admin\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=> 'Auth'], function () {
    Route::get('/', [LoginController::class,'showAdminLoginForm'])->name('admin.login.form');
    Route::get('/login', [LoginController::class,'showAdminLoginForm'])->name('admin.login.form');
    Route::post('/login', [LoginController::class,'adminLogin'])->name('admin.login');
    Route::get('/register', [RegisterController::class,'showAdminRegisterForm'])->name('admin.register.form');
    Route::post('/register', [RegisterController::class,'createAdmin'])->name('admin.register');
    Route::post('/logout', [LoginController::class,'logout'])->name('admin.logout');
});

Route::group(['middleware'=>['auth:admin']],function (){

    Route::get('/dashboard', function () {
        return view('admin/index');
    });
});


