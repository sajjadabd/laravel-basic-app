<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login() {
        return request()->all();
        return 'login';
    }

    public function register() {
        return request()->all();
        return 'register';
    }
}
