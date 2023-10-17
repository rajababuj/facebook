<?php

namespace App\Repositories\Interfaces;

interface PostInterface
{


    public function storePost($post);

    public function like($post);
    public function dislike($post);
}
