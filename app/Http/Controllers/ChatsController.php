<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Repositories\Interfaces\ChatInterface;


class ChatsController extends Controller
{
    protected $chatRepository;

    public function __construct(ChatInterface $chatRepository)
    {
        $this->chatRepository = $chatRepository;
    }
    public function sendMessage(Request $request)
    {
        
        $data = $request->all();
        // dd($data);
        $data = $this->chatRepository->storePost($data);
        if ($data['status']) {
            return response()->json([
                'message' => 'chat added successfully!'
            ]);
        } else {
            return response()->json([
                'message' => 'Something wrong!'
            ]);
        }
    }

    
}
