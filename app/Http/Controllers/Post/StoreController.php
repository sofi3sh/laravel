<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $tages = $data['tages'];
        unset($data['tages']);

        $post = Post::create($data);

        $post->tages()->attach($tages);



        return redirect()->route('post.index');
    }
}

























