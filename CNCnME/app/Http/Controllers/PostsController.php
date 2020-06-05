<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => auth()->user()->timeline()
        ]);
    }
    
    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:250']);
        Post::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect()->route('home');
    }
}
