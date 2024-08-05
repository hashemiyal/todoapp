<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;

Route::get('/', function () {
    $users=User::all();
    return view('welcome',compact('users'));
});

Route::get('/login',[App\Http\Controllers\LoginController::class,'login']);
Route::get('/register',[App\Http\Controllers\LoginController::class,'register']);

