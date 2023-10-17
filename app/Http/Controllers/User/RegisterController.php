<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function Register()
    {
        return view('Register');
    }

    public function dashboard()
    {
        $user_id = Auth::id();
        $following_ids = DB::table('followings')->where('following_id', $user_id)->get();
        $private_users = User::select('id')->whereIn('id', $following_ids->pluck('follower_id'))->where('profiletype', "private")->get();
        $public_users = User::select('id')->where('profiletype', "public")->get();
        $posts = Post::whereIn('user_id', $private_users->pluck('id')->toArray() + $public_users->pluck('id')->toArray())->with('comments.replies')->get();

        $comments = Comment::all();

        $users = User::withCount(["followings", "followers"])->get();
        
        return view('dashboard', compact('users', 'posts', 'comments'));
    }

    public function store(RegisterRequest $request)
    {

        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect()->route('user.register')->with('message', 'A user with this email address already exists.');
        }
        $password = Hash::make($request->password);

        $data = array_merge($request->only('name', 'email'), [
            'password' => $password
        ]);
        User::create($data);

        return redirect()->route('dashboard');
    }




    public function follow($following_id)
    {
        // dd($following_id);
        $following = User::find($following_id);
        if (auth()->user()->followings->contains($following_id)) {
            auth()->user()->followings()->detach($following);
        } else {
            auth()->user()->followings()->attach($following);
        }

        return redirect()->back();
    }
}
