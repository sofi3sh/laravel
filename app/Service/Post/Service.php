<?php

namespace App\Service\Post;

use App\Models\Post;

class Service
{

     public   function store($data)
     {
         $tages = $data['tages'];
         unset($data['tages']);

         $post = Post::create($data);

         $post->tages()->attach($tages);
     }

     public function update($post, $data)
     {
         $tages = $data['tages'];
         unset($data['tages']);

         $post->update($data);
         $post->tages()->sync($tages);
     }
}
