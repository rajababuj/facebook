<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Message;



class RegisterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest:web')->except('dashboard', 'register');
    // }
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

        $posts = Post::whereIn('user_id', $private_users->pluck('id')->toArray() + $public_users->pluck('id')->toArray())->with('comments.replies')->with('user')->get();
        $posts = Post::whereIn('user_id', $private_users->pluck('id')->toArray() + $public_users->pluck('id')->toArray())->with('comments')->get();
       
        // $comments = Comment::all();
        $messages = Message::all();
        // dd($messages);
        $followings = Auth::user()->followings;
        $followers = Auth::user()->followers;


        $like_posts = Like::where('user_id', Auth()->user()->id)->pluck('post_id')->toArray();


        // dd($post_likes);

        // pending_requests
        $p_follower_id = DB::table('followings')->where('follower_id', auth()->id())
            ->where('status', 'pending')
            ->get()
            ->pluck('following_id');

        $pending_users = User::whereIn('id', $p_follower_id)->withCount(["followings", "followers"])->get();

        $a_follower_id = DB::table('followings')->where('follower_id', auth()->id())
            ->where('status', 'accept')
            ->get()
            ->pluck('following_id');


        $ap_follower_id = DB::table('followings')->where('following_id', auth()->id())
            ->where('status', 'pending')
            ->get()
            ->pluck('follower_id');
        $pending_auth_users = User::whereIn('id', $ap_follower_id)->withCount(["followings", "followers"])->get();


        $aa_follower_id = DB::table('followings')->where('following_id', auth()->id())
            ->where('status', 'accept')
            ->get()
            ->pluck('follower_id');


        $not_allowed = $p_follower_id->toArray() + $a_follower_id->toArray() + [Auth::id()] + $aa_follower_id->toArray();
        $users = User::whereNotIn("id", $not_allowed)->withCount(["followings", "followers"])->get();
        return view('dashboard', compact('posts',  'pending_users', 'users', 'pending_auth_users', 'messages', 'followers', 'followings', 'like_posts'));
    }

    public function store(RegisterRequest $request)
    {
        // dd($request->all());
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect()->route('user.register')->with('message', 'A user with this email address already exists.');
        }

        $password = Hash::make($request->password);

        $data = array_merge($request->only('name', 'email',), [
            'password' => $password
        ]);

        User::create($data);

        return redirect()->route('user.login');
    }
    public function follow($following_id)
    {
        // dd($following_id);
        $following = User::find($following_id);
        $response = [];

        if (auth()->user()->followings->contains($following_id)) {
            auth()->user()->followings()->detach($following);
            $response = ['action' => 'unfollow'];
        } else {
            auth()->user()->followings()->attach($following);
            $response = ['action' => 'follow'];
        }

        return response()->json(['status' => 'success', 'data' => $response]);
    }

    public function updateProfileType(Request $request)
    {
        $profileType = $request->input('profiletype');
        auth()->user()->update(['profiletype' => $profileType]);
        return response()->json(['success' => true, 'message' => 'Profile type updated successfully']);
    }
}
