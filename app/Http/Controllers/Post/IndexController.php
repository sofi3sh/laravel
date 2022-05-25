<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {


        $posts = Post::all();

        return view('post.index', compact('posts'));
    }
}

























