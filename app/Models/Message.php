<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;


    protected $fillable = [
        'from_user_id','to_user_id','message', 'files', 'videos'

    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
