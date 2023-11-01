<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    protected $postRepository;

    public function __construct(PostInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data = $this->postRepository->storePost($data);
        if ($data['status']) {
            return response()->json([
                'message' => 'Post added successfully!'
            ]);
        } else {
            return response()->json([
                'message' => 'Something wrong!'
            ]);
        }
    }
    // Save Like 
    public function dislike(Request $request)
    {
        $data = $request->all();

        $like_post = Like::where('post_id', $data['post_id'])->where('user_id', Auth()->user()->id)->first();

        if ($like_post) {
            $like_post->delete();
            return response()->json([
                'message' => 'You post dislike successfully!'
            ]);
        } else {
            return response()->json([
                'message' => 'something went wrong!'
            ]);
        }
    }
    public function pressLike(Request $request)
    {


        $data = $request->all();
        $likes = new Like();
        $likes->user_id = Auth()->user()->id;
        $likes->post_id = $data['post_id'];
        $likes->save();

        return response()->json([
            'message' => 'You post like successfully!'
        ]);
    }
}
