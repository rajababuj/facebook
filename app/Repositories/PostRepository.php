<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;
use App\Models\Like;
use App\Models\Message;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\MediaHelper;
use Illuminate\Support\Facades\DB;


class PostRepository implements PostInterface
{
    public function storePost($data)
    {
        DB::beginTransaction();
        try {
            // dd(Auth::user()->id);
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
            // dd($e);
            DB::rollback();
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function pressLike($data)
    {
        try {
            DB::beginTransaction();

            $likes = new Like();
            $likes->user_id = auth()->user()->id;
            $likes->post_id = $data['post_id'];
            $likes->save();

            $post_count = Like::where('post_id', $data['post_id'])->count();

            DB::commit();

            return ['status' => true, 'post_like_count' => $post_count];
        } catch (\Exception $e) {
            DB::rollback();
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function dislike($data)
    {
        try {
            DB::beginTransaction();

            $like_post = Like::where('post_id', $data['post_id'])->where('user_id', auth()->user()->id)->first();

            if ($like_post != null) {
                $like_post->delete();
                $user_id = auth()->user()->id;
                $post_count = Like::where('user_id', $user_id)->where('post_id', $data['post_id'])->count();

                DB::commit();

                return ['status' => true, 'post_like_count' => $post_count];
            } else {
                DB::rollback();
                return ['status' => false];
            }
        } catch (\Exception $e) {
            DB::rollback();
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }


    public function storeChat($data)
    {
        DB::beginTransaction();

        try {
            $message = new Message;
            $message->message = $data['message'];
            $message->to_user_id = $data['to_user_id'];
            $message->from_user_id = Auth::id();

            if (isset($data['image'])) {
                $img = $data['image'];
                $name = time() . '.' . $img->extension();
                $path = public_path() . "/uploads/images/chat_img";
                $img->move($path, $name);
                $message->files = $name;
            }

            if (isset($data['videos'])) {
                $video = $data['videos'];
                $name = time() . '.' . $video->extension();
                $path = public_path() . "/uploads/videos/chat_video/video/";
                $video->move($path, $name);
                $message->videos = $name;
            }

            if (isset($data['doc_file'])) {
                $doc_file = $data['doc_file'];
                $name = time() . '.' . $doc_file->extension();
                $path = public_path() . "/uploads/doc_file/chat_doc_file/doc_file";
                $doc_file->move($path, $name);
                $message->doc_file = $name;
            }

            $message->save();

            DB::commit();

            return ['status' => true];
        } catch (\Exception $e) {
            DB::rollback();

            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function commentstore($data)
    {
        $input['comment'] = $data['comment'];
        $input['post_id'] = $data['post_id'];
        $input['user_id'] = auth()->user()->id;

        $comment = Comment::create($input);


        return ['status' => true];
    }
    public function reply($data)
    {
        // dd($data);
        $input['user_id'] = auth()->user()->id;
        $input['comment'] = $data['comment'];
        $input['post_id'] = $data['post_id']; 
        $input['parent_id'] = $data['comment_id'];
        
        $comment = Comment::create($input);

        return ['status' => true];
        
    }
}
