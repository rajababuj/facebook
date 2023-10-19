<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use App\Http\Requests\Chat\CreateChatRequest;
use App\Http\Requests\Chat\SendTextMessageRequest;
use App\Models\ChatMessages;
use App\Events\ChatMessageSent;
use App\Events\ChatMessageStatus;
use App\Http\Resources\ChatResource;
use App\Http\Resources\MassageResource;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function createChat(CreateChatRequest $request){
   
        DB::beginTransaction();

        try {
           
            $users = $request->users;
            $chat = $request->user()->chats()->whereHas('participants', function ($q) use ($users) {
                $q->where('user_id', $users[0]);
            })->first();
        
            if (empty($chat)) {
                array_push($users, $request->user()->id);
                $chat = Chat::create()->makePrivate($request->isPrivate);
                $chat->participants()->attach($users);
            }
        
            $success = true;
            
            DB::commit();
        
            return response()->json([
                'chat' => new ChatResource($chat),
                'success' => $success
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
         
            return response()->json(['error' => 'Chat creation failed'], 500);
        }
        
    } 
   
}
