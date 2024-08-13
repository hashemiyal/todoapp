<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[App\Http\Controllers\LoginController::class,'login']);
Route::get('/register',[App\Http\Controllers\LoginController::class,'register']);
Route::get('/users',[App\Http\Controllers\LoginController::class,'users']);

