<?php

namespace App\Repositories\Interfaces;

interface PostInterface
{


    public function storePost($data);
    public function pressLike($data);
    public function dislike($data);
    public function storeChat($data);
    public function commentstore($data);
    public function reply($data);
    public function groupstore($data);
    public function groupsendMessage($data);
    

}
