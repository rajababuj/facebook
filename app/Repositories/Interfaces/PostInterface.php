<?php

namespace App\Repositories\Interfaces;

interface PostInterface
{


    public function storePost($data);

    public function like($post);
    public function dislike($post);
}
