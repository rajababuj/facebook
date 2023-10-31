<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ChatInterface;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\MediaHelper;



class ChatRepository implements ChatInterface
{


    public function storePost($data)
    {

    //    dd($data);

        $message = new Message;

        $message->message = $data['message'];
        $message->to_user_id = $data['to_user_id']; 
        $message->from_user_id = Auth::id(); 
        $message->save();
        return ['status' => true];

        
    }
}
