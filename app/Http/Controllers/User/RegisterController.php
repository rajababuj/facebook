<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\Post;

class RegisterController extends Controller
{
    public function Register()
    {

        return view('Register');
    }

    public function dashboard(){
        $users = User::withCount(["followings", "followers"])->get();
        $posts = Post::all();
        return view('dashboard',compact('users', 'posts'));
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
        $following = User::find($following_id);
        if (auth()->user()->followings->contains($following_id)){
            auth()->user()->followings()->detach($following);
        }else{
            auth()->user()->followings()->attach($following);
        }
       
        return redirect()->back();
    }

    // public function follow($following_id)
    // {
    //     $following = User::find($following_id);
    //     if (auth()->user()->followings->contains($following_id)) {
    //         auth()->user()->followings()->detach($following);
    //     }
    //     auth()->user()->followings()->attach($following); // Change detach to attach if you want to add a follow.
    //     return redirect()->back();
    // }
    
}
