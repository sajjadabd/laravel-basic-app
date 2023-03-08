<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Post;

class PagesController extends Controller
{
    public function home() {
        $posts = Post::with('user')->get();

        return $posts;

        return view('home');
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
