<?php

namespace App\Repositories\Interfaces;

interface CommentInterface
{


    public function storeComment($data);
    public function replyComment($data);


}
