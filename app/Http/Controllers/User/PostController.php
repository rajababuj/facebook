<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostLikesDislike;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        // dd($data);

        $post = new Post;
        $post->description = $data['description'];
        if ($request->has('media')) {
            $media = $request->media;
            $name = time() . '.' . $media->extension();
            $path = public_path() . '/assets/images/media';
            $media->move($path, $name);
            $post->media = $name;
        }
        $post->activity = $data['activity'];
        $post->tag_user = $data['tag_user'];
        $post->location = $data['location'];
        $post->link = $data['link'];
        $post->user_id = Auth::id();

        // dd($post);
        $post->save();

        return response()->json([
            'message' => 'post added successfully!'
        ]);
    }

    // Save Like Or dislike
    public function like(Request $request)
    {
        $data = $request->all();

        if ($data['type'] == 'like') {


            $post_like = new PostLikesDislike();
            $post_like->post_id = $data['post_id'];
            $post_like->user_id = Auth::user()->id;
            $post_like->is_like = '1';
            $post_like->save();
        }
        return response()->json(['message' => 'Liked']);
    }
    public function dislike(Request $request)
    {
        $data = $request->all();

        $post_dislike = new PostLikesDislike();
        $post_dislike->post_id = $data['post_id'];
        $post_dislike->user_id = Auth::user()->id;
        $post_dislike->is_like = '0';
        $post_dislike->save();

        return response()->json(['message' => 'Disliked']);
    }
}
