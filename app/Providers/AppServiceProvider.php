<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PostRepository;
use App\Repositories\Interfaces\PostInterface;

use App\Repositories\ChatRepository;
use App\Repositories\Interfaces\ChatInterface;
use Illuminate\Support\Facades\Schema;

use App\Repositories\Interfaces\CommentInterface;
use App\Repositories\CommentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostInterface::class, PostRepository::class);
        $this->app->bind(ChatInterface::class, ChatRepository::class);
        $this->app->bind(CommentInterface::class, CommentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}


