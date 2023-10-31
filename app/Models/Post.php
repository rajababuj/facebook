<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'activity', 'tag_user', 'location', 'link', 'user_id', 'media'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageAttribute($image)
    {
        $data = explode(',', $image);
        $arr = [];
        foreach ($data as $image) {
            array_push($arr, asset('uploads/image/' . $image));
        }
        return $arr;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
