<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login() {
        return request(['email' , 'password']);
        return 'login';
    }

    public function register() {
        return request([ 'username' , 'email' , 'password' ]);
        return 'register';
    }
}
