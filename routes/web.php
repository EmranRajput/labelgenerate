<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/', [UserController::class, 'Dashboard'])->name('web.dashboard');


Route::get('/signup', [UserController::class, 'SignUpPage'])->name('user.signup.page');

Route::get('/login', [UserController::class, 'LoginPage'])->name('user.login.page');

