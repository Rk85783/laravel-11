<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user-home', [UserController::class, 'userHome']);
Route::get('user-about', [UserController::class, 'userAbout']);
