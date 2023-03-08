<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login() {
        return request()->validate([
            'email' => 'required' , 
            'password' => 'required'
        ]);
        return 'login';
    }

    public function register() {
        return request()->validate([ 
            'username' => 'required' , 
            'email' => 'required' , 
            'password' => 'required'
        ]);
        return 'register';
    }
}
