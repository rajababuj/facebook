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


        $message = new Message();

        $message->message = $data['message'];
        $message->user_id = Auth::id();
        $message->save();
        return ['status' => true];

        // MediaHelper::imageUpload($message, $data['media']);
    }
}
