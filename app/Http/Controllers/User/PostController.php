<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostLikesDislike;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\PostInterface;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }


    public function store(Request $request)
    {
        $data = $request->all();

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

        $this->postRepository->storePost($post);

        $post->save();

        return response()->json([
            'message' => 'Post added successfully!'
        ]);
    }


    // Save Like Or dislike
    public function like(Request $request)
    {
        $post = $request->all();

        if ($post['type'] == 'like') {
            $post_like = new PostLikesDislike();
            $post_like->post_id = $post['post_id'];
            $post_like->user_id = Auth::user()->id;
            $post_like->is_like = '1';
            $result = $this->postRepository->like($post_like);

            if ($result) {
                return response()->json(['message' => 'Liked']);
            }
        }

        return response()->json(['message' => 'Failed to like the post']);
    }

    public function dislike(Request $request)
    {
        $post = $request->all();

        $post_dislike = new PostLikesDislike();
        $post_dislike->post_id = $post['post_id'];
        $post_dislike->user_id = Auth::user()->id;
        $post_dislike->is_like = '0';

        $result = $this->postRepository->like($post_dislike);
        if ($result) {
            return response()->json(['message' => 'Disliked']);
        }

        return response()->json(['message' => 'Failed to Dislike the post']);
    }
}
