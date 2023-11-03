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

     
        // dd($data);
        $message = new Message;

        $message->message = $data['message'];
        $message->to_user_id = $data['to_user_id']; 
        $message->from_user_id = Auth::id();
        if($data['image']){
           $image = $data['image'];
           $name = time() . '.' . $image->extension();
           $path = public_path(). '/uploads/images/chat_img';
           $image->move($path, $name);
        }

        $message->files = $name;
        $message->save();
        return ['status' => true];

        
    }
}
