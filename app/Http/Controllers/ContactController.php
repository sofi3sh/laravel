<?php

namespace App\Http\Controllers;

use App\Models\Post;


class ContactController extends Controller
{
    public function index()
    {
        $posts = Post::all();
            return view('contact', compact('posts'));
    }


}

























