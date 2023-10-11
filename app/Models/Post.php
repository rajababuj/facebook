<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'description',
        'image_url',
        'video_url',
        'mood_activity',
        'tag_friends',
        'post_location',
        'share_link',
        'post_gif',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
