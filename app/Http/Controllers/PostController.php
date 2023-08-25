<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
        
    }
   public function show($id)
{
    $post = Post::find($id);
    return view('posts.show',['post'=>$post]);

}

}
