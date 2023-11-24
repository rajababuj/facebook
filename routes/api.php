<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
/*

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('user-details', [UserController::class, 'userDetails']);
    Route::post('posts', [PostController::class, 'store']);
    Route::post('posts/dislike', [PostController::class, 'dislike']);
    Route::post('like', [PostController::class, 'pressLike']);
    Route::post('messages', [PostController::class, 'sendMessage']);
    Route::post('store', [PostController::class, 'commentstore']);
    Route::post('comments/reply/{comment}', [PostController::class, 'reply']);
    Route::post('follow/{following_id}', [PostController::class, 'follow']);
   
});

