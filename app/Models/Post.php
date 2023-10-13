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
        'media',
        'activity',
        'tag_user',
        'location',
        'link',
    ];
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
}
