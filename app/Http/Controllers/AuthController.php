<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use \App\Models\User;

class AuthController extends Controller
{
    //
    public function login() {
        $validated_data = request()->validate([
            'email' => ['required' , 'email' , Rule::unique('users' , 'email') ] , 
            'password' => [ 'required' , 'min:3' ] 
        ]);

        $validated_data['password'] = bcrypt($validated_data['password']);

        return $validated_data;

        return 'login';
    }

    public function register() {
        $validated_data = request()->validate([ 
            'username' => [  'required' , Rule::unique('users' , 'username')] , 
            'email' => [ 'required' , 'email' , Rule::unique('users' , 'email')] , 
            'password' => [ 'required' , 'min:3']
        ]);

        $validated_data['password'] = bcrypt($validated_data['password']);

        User::create([
            'username' => $validated_data['username'],
            'email' => $validated_data['email'],
            'password' => $validated_data['password']
        ]); 

        return $validated_data;

        //return 'register';
    }
}
