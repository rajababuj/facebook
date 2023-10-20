<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\MediaHelper;
use Illuminate\Support\Facades\DB;
use App\Models\PostLikesDislike; 



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

            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function like($post)
    {
        $post_like = new PostLikesDislike();
        $post_like->post_id = $post['post_id'];
        $post_like->user_id = Auth::user()->id;
        $post_like->is_like = '1';
        $post_like->save();

        return ['status' => true];

    }
    public function dislike($post)
    {
        $post_dislike = new PostLikesDislike();
        $post_dislike->post_id = $post['post_id'];
        $post_dislike->user_id = Auth::user()->id;
        $post_dislike->is_like = '0';
        $post_dislike->save();
        return ['status' => true];

    }
   
}
