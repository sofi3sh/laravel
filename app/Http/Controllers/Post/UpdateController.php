<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;



class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $Data = $request->validated();



        $tages = $Data['tages'];
        unset($Data['tages']);

        $post->update($Data);
        $post->tages()->sync($tages);


        return redirect()->route('post.show', $post->id);
    }
}

























