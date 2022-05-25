<?php

namespace App\Http\Controllers;

use App\Models\Post;


class MainController extends Controller
{
    public function index()
    {
        $posts = Post::all();
            return view('main', compact('posts'));
    }


}

























