<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{

    public function store(Post $post)
    {
        $post->like(current_user());
        return back();
    }

    public function destroy(Post $post)
    {
        $post->dislike(current_user());
        return back();
    }

}
