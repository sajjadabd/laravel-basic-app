<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use \App\Models\User;
use Validator;

class AuthController extends Controller
{
    //
    public function login(Request $request) {

        //dd(request()->all());

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
        ]);
 
        if ($validator->fails()) {
            return redirect('/login')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        /*
        $validated_data = request()->validate([
            'email' => ['required' , 'email' , Rule::unique('users' , 'email') ] , 
            'password' => [ 'required' , 'min:3' ] 
        ]);

        $validated_data['password'] = bcrypt($validated_data['password']);
        */

        //return redirect()->back();

        //return redirect()->to($this->getRedirectUrl())                   ->withInput(request()->input())->withErrors(errors(), $this->errorBag());

    }

    public function register(Request $request) {

        //dd(request()->all());

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
        ]);
 
        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        /*
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
        */
        //return dd($validated_data);

        //return redirect()->to('/register')->withErrors();

        //return back()->withInput();


    }
}
