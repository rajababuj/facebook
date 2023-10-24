<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    public function like(Request $request)
    {
        $post = $request->all();
        $post = $this->postRepository->like($post);

        if ($post['status']) {
            return response()->json(['message' => 'Liked']);
        } else {
            return response()->json(['message' => 'Something went wrong']);
        }
    }


    public function dislike(Request $request)
    {
        $post_dislike = $request->all();
        $post_dislike = $this->postRepository->like($post_dislike);

        if ($post_dislike['status']){
            return response()->json(['message' => 'DisLiked']);
        } else {
            return response()->json(['message'=> 'Failed to Dislike the post']);
        }
        

        
    }
   
}
