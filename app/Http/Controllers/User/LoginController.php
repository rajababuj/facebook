<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{

    public function index()
    {

        if (auth()->user()) {
            return redirect()->route('dashboard');
        }

        return view('Login');
    }

    public function login(LoginRequest $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        // $user = User::where('email', $request->email)->first();

        // if (!$user) {
        //     return response()->json(['errors' => ['email' => ['The email is not registered. Please sign up.']]], 422);
        // }
        


        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credential)) {
            return redirect()->route('dashboard');
        } else {
            Log::info('Redirecting to login with message');
            return redirect()->route('user.login')->with('message', 'The email is not registered. Please sign up.');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login')->with('success', 'You have been successfully logged out');
    }
}
