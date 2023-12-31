<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongTo(Post::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
    
    
}
