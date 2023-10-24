<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\ChatsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', [RegisterController::class, 'dashboard'])->name('dashboard');
    Route::get('user/{following_id}/follow', [RegisterController::class, 'follow'])->name('follow');

    Route::post('/posts', [PostController::class, 'store'])->name('post.store');
    Route::post('posts/like', [PostController::class, 'like'])->name('like');
    Route::post('posts/dislike', [PostController::class, 'dislike'])->name('dislike');

    Route::post('store', [CommentController::class, 'store'])->name('comments.store');
    Route::post('comments/reply/{comment}', [CommentController::class, 'reply'])->name('comments.reply'); 
});

Route::get('user/register', [RegisterController::class, 'Register'])->name('user.register');
Route::post('user/register', [RegisterController::class, 'store'])->name('user.register.submit');

Route::get('user/login', [LoginController::class, 'index'])->name('user.login');
Route::post('user/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('user/logout', [LoginController::class, 'logout'])->name('user.logout');


// Route::get('chat', [PostController::class, 'index'])->name('chat');

Route::get('chat', [ChatsController::class, 'index'])->name('chat');
Route::get('messages', [ChatsController::class, 'fetchMessages'])->name('fetchMessages');
Route::post('messages', [ChatsController::class, 'sendMessage'])->name('sendMessage');
