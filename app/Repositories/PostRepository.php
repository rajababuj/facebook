<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\MediaHelper;
use Illuminate\Support\Facades\DB;



class PostRepository implements PostInterface
{

    public function storePost($data)
    {
        DB::beginTransaction();

        try {
            $post = new Post;

            $post->description = $data['description'];
            $post->activity = $data['activity'];
            $post->tag_user = $data['tag_user'];
            $post->location = $data['location'];
            $post->link = $data['link'];
            $post->user_id = Auth::id();
            $post->save();

            MediaHelper::imageUpload($post, $data['media']);

            DB::commit();

            return ['status' => true];
        } catch (\Exception $e) {
            DB::rollback();

            // You can log the error or handle it as needed.
            // For example, return an error message:
            return ['status' => false, 'error' => $e->getMessage()];
        }
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
