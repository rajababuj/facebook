<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('description');
            $table->string('image_url', 255);
            $table->string('video_url', 255)->nullable();
            $table->string('mood_activity', 50)->nullable();
            $table->string('tag_friends', 255)->nullable();
            $table->string('post_location', 100)->nullable();
            $table->string('share_link', 255)->nullable();
            $table->string('post_gif', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('users');
    }
}
