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
            $post = new Post();

            $post->description = $data['description'];

            $post->activity = $data['activity'];
            $post->tag_user = $data['tag_user'];
            $post->location = $data['location'];
            $post->link = $data['link'];
            $post->user_id = Auth::id();
            MediaHelper::imageUpload($post, $data['media']);
            $post->save();

            DB::commit();

            return ['status' => true];
        } catch (\Exception $e) {
            DB::rollback();

            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

}
