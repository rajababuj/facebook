<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
 
    public function index(){

        if(auth()->user()){
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
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credential)) {

            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('message', 'The email or password is incorrect, please try again.');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login')->with('success', 'You have been successfully logged out');

    }

}
