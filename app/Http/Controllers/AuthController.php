<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //
    public function login() {
        return request()->validate([
            'email' => ['required' , 'email' , Rule::unique('users' , 'email') ] , 
            'password' => [ 'required' , 'min:3' ] 
        ]);
        return 'login';
    }

    public function register() {
        return request()->validate([ 
            'username' => [  'required' , Rule::unique('users' , 'username')] , 
            'email' => [ 'required' , 'email' , Rule::unique('users' , 'email')] , 
            'password' => [ 'required' , 'min:3']
        ]);
        return 'register';
    }
}
