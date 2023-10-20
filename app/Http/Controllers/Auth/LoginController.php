<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function __construct()
{
    $this->middleware('auth:api');
}

  public function login(LoginRequest $request)
  {
    dd(Auth::guard());
    if (Auth::guard('api')->attempt([
      'email' => $request->email,
      'password' => $request->password,
    ])) {
      $user = Auth::guard('api')->user();

      
      $user->tokens->each(function ($token) {
        $token->delete();
      });

      $token = $user->createToken(request()->hello());

      return response()->json([
        'id' => $user->id,
        'token' => $token->plainTextToken,
        'name' => $user->name,
        'success' => true,
        dd(Auth::guard())
      ], 200);
    } else {
      return response()->json(['error' => __('auth.Unauthorised')], 401);
    }
  }
}
