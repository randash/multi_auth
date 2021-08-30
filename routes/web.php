<?php

use App\Http\Controllers\user\Auth\loginController;
use App\Http\Controllers\user\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=> 'Auth'], function () {
    Route::get('/', [LoginController::class,'showUserLoginForm'])->name('user.login.form');
    Route::get('/login', [LoginController::class,'showUserLoginForm'])->name('user.login.form');
    Route::post('/login', [LoginController::class,'userLogin'])->name('user.login');
    Route::get('/register', [RegisterController::class,'showUserRegisterForm'])->name('user.register.form');
    Route::post('/register', [RegisterController::class,'createUser'])->name('user.register');
    Route::post('/logout', [LoginController::class,'logout'])->name('user.logout');
});

Route::group(['middleware'=>['auth:user']],function (){
    Route::get('/dashboard', function () {
        return view('user/dashboard');
    });
});
