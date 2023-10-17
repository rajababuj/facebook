<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;


class PostRepository implements PostInterface
{


    public function storePost($post)
    {
        return $post->save();
    }

    public function like($post)
    {
        return $post->save();
    }

    public function dislike($post)
    {
        return $post->save();
    }
}
