<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTage;
use App\Models\Tage;


class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tages = Tage::all();
        return view('post.create', compact('categories','tages'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'img' => 'required|string',
            'category_id' => 'required',
            'tages' => 'required',
        ]);

        $tages = $data['tages'];
        unset($data['tages']);

        $post = Post::create($data);

        $post->tages()->attach($tages);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tages = Tage::all();
        return view('post.edit', compact('post','categories','tages'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'img' => 'string',
            'category_id' => '',
            'tages' => '',
        ]);

        $tages = $data['tages'];
        unset($data['tages']);

        $post->update($data);
        $post->tages()->sync($tages);

        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {

        $post->delete();

        /*   $post = Post::withTrashed()->find(2);
           $post->restore();*/
        return redirect()->route('post.index');

    }
}

























