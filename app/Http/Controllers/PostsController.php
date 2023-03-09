<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use \App\Models\Post;



class PostsController extends Controller
{

    public function show(Post $post) {
        return view('post')->with(compact('post'));
    }

    public function createPost() {
        return view('create-post');
    }

    public function storePost(Request $request)  {

        if(!auth()->check()) {
            return redirect('/login');
        }

        $validator = Validator::make( $request->all(), [
            'title' => 'required',
            'content' => 'required|max:255',
        ]);
 
        if ($validator->fails()) {
            return redirect('/create-post')
                        ->withErrors($validator)
                        ->withInput();
        }


        Post::create([
            'title' => $request->input('title'),
            'user_id' => auth()->user()->id ,
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content')
        ]);

        return redirect('/')->with('success' , 'Post created successfully');

        
    }
}
