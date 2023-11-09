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
     
        if (isset($data['videos'])) {
            $video = $data['videos'];
            $name = time() . '.' . $video->extension();
            $path = public_path(). "/uploads/videos/chat_video/video/";
            $video->move($path, $name); 
            $message->videos = $name;  
        }
        if (isset($data['doc_file'])) {
            $doc_file = $data['doc_file'];
            $name = time() . '.' . $doc_file->extension();
            $path = public_path(). "/uploads/doc_file/chat_doc_file/doc_file";
            $doc_file->move($path, $name); 
            $message->doc_file = $name;  
        }
        
        $message->save();
        
        
        return ['status' => true];
    }
}
