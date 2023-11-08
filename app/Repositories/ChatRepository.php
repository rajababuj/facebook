<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ChatInterface;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\MediaHelper;
use Illuminate\Http\Client\Request;

class ChatRepository implements ChatInterface
{


    public function storePost($data)
    {


        // dd($data['image']);
        $message = new Message;
        $message->message = $data['message'];
        $message->to_user_id = $data['to_user_id'];
        $message->from_user_id = Auth::id();
        

        if (isset($data['image'] )) {
            $img = $data['image'];
            $name = time() . '.' . $img->extension();
            $path = public_path(). "/uploads/images/chat_img";
            $img->move($path, $name); 
            $message->files = $name;  
        }

        if (isset($data['video'])) {
            $video = $data['video'];
            $name = time() . '.' . $video->extension();
            $path = public_path(). "/uploads/images/chat_img/video";
            $video->move($path, $name); 
            $message->video = $name;  
        }
        
        $message->save();
        
        
        return ['status' => true];
    }
}
