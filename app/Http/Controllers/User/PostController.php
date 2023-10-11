<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'description' => 'required',
            'image_url' => 'required',
        ]);

        $post = new Post;
        $post->description = $validatedData['description'];
        $post->image_url = $validatedData['image_url'];
        $post->user_id = Auth::id();
      
        $post->video_url = null;
        $post->mood_activity = null;
        $post->tag_friends = null;
        $post->post_location = null;
        $post->share_link = null;
        $post->post_gif = null;
        $post->phoneNumber = $request->phoneNumber;
        $post->message = $request->message;

        $post->save();

        return redirect('dashboard')->with('status', 'Message sent!');
    }
}
