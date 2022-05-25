<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tage;


class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tages = Tage::all();
        return view('post.create', compact('categories','tages'));
    }
}

























