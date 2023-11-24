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

Route::get('user/register', [RegisterController::class, 'Register'])->name('user.register');
Route::post('user/register', [RegisterController::class, 'store'])->name('user.register.submit');
Route::post('user/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('user/logout', [LoginController::class, 'logout'])->name('user.logout');
Route::get('user/login', [LoginController::class, 'index'])->name('user.login');



Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', [RegisterController::class, 'dashboard'])->name('dashboard');
    Route::post('follow/{following_id}', [RegisterController::class, 'follow'])->name('follow');

    Route::post('/posts', [PostController::class, 'store'])->name('post.store');
    Route::post('posts/dislike', [PostController::class, 'dislike'])->name('dislike');
    Route::post('like', [PostController::class, 'pressLike'])->name('pressLike');
    Route::post('store', [PostController::class, 'commentstore'])->name('comments.store');
    Route::post('comments/reply/{comment}', [PostController::class, 'reply'])->name('comments.reply');
    Route::post('messages', [PostController::class, 'sendMessage'])->name('sendMessage');
    Route::post('/update-profile-type', [RegisterController::class, 'updateProfileType'])->name('updateProfileType');

});





