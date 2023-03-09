<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Post;

class PagesController extends Controller
{
    public function home() {
        $posts = Post::with('user')->latest()->get();

        //return $posts;

        return view('home')->with(compact('posts'));
    }

    public function about() {
        return view('about');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }
}
