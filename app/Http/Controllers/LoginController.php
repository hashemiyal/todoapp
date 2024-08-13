<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livewire\Login;
class LoginController extends Controller

{   public function login(){
    return view('layout.login');
}
public function register(){
    return view('layout.register');
}
public function  users(){
return view('users');
}
}
    
