<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegistrationRequest;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(RegistrationRequest $request){

        
        $newuser = $request->validated();

        $newuser['password'] = Hash::make($newuser['password']);
        $user = User::create($newuser);
        $success['token'] = $user->createToken('user')->accessToken;
        $success['name'] = $user->name;
        $success['success'] = true;
        dd(Auth::guard());
        return response()->json($success, 200);

    }
}
