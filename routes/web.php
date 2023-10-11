<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\PostController;

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

Route::group([ 'prefix' => 'user', 'middleware' => 'web'],function (){

    Route::get('/dashboard', [RegisterController::class, 'dashboard'])->name('dashboard');
    Route::get('user/{following_id}/follow',[RegisterController::class,'follow'])->name('follow');

    Route::get('/posts', [PostController::class, 'index'])->name('post.index');
    Route::post('/posts', [PostController::class, 'store'])->name('post.store');
   
   

});
Route::get('user/register', [RegisterController::class, 'Register'])->name('user.register');
Route::post('user/register', [RegisterController::class, 'store'])->name('user.register.submit');

Route::get('user/login', [LoginController::class, 'index'])->name('user.login ');
Route::post('user/login', [LoginController::class,'login'])->name('login.submit');
