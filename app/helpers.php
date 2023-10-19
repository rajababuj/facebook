<?php

namespace App\Http\Helpers;

use Illuminate\Http\Request;
use App\Models\Post; 


class MediaHelper
{
    public static function imageUpload(Post $post, $media)
    {
        if ($media) {
            $name = time() . '.' . $media->extension();
            $path = public_path() . '/assets/images/media';
            $media->move($path, $name);
            $post->media = $name;
            $post->save(); 
        }
    }
}
