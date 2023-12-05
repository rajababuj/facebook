<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostInterface;
use Illuminate\Support\Facades\Log;
use App\Models\GroupChat;

class PostController extends Controller
{

    protected $postRepository;

    public function __construct(PostInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data = $this->postRepository->storePost($data);
        if ($data['status']) {
            return response()->json([
                'message' => 'Post added successfully!'
            ]);
        } else {
            return response()->json([
                'message' => 'Something wrong!'
            ]);
        }
    }
    public function pressLike(Request $request)
    {
        $data = $request->all();
        $result = $this->postRepository->pressLike($data);

        if ($result['status']) {
            return response()->json([
                'message' => 'Your post like successfully!',
            ]);
        }
    }

    public function dislike(Request $request)
    {
        $data = $request->all();
        $result = $this->postRepository->dislike($data);

        if ($result['status']) {
            return response()->json([
                'message' => 'Your post dislike successfully!',
            ]);
        }
    }

    public function sendMessage(Request $request)
    {

        $data = $request->all();
        // dd($data);
        $result = $this->postRepository->storeChat($data);
        if ($result['status']) {
            return response()->json([
                'message' => 'chat added successfully!'
            ]);
        } else {
            return response()->json([
                'message' => 'Something wrong!'
            ]);
        }
    }


    public function commentstore(Request $request)
    {
        $data = $request->all();

        Log::info('data successfully', [$data]);
        $result = $this->postRepository->commentstore($data);
        if ($result['status']) {
            return response()->json([
                'comment' => $data['comment'],
                'message' => 'comment added successfully!'

            ]);
        } else {
            return response()->json([
                'message' => 'Something wrong!'
            ]);
        }
    }

    public function reply(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $result = $this->postRepository->reply($data);

        if ($result && isset($result['status'])) {
            return response()->json([
                'message' => 'Reply added successfully!'
            ]);
        } else {
            return response()->json([
                'message' => 'Something wrong: ' . ($result['message'] ?? 'Unknown error')
            ]);
        }
    }

    public function groupstore(Request $request)
    {
        $data = $request->all();
        $result = $this->postRepository->groupstore($data);

        if ($result && isset($result['status'])) {
            return response()->json([
                'message' => 'Group created successfully!',
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong!',
            ]);
        }
    }
    public function groupsendMessage(Request $request)
    {
        $data = $request->all();
      //   dd($data);
        $result = $this->postRepository->groupsendMessage($data);

        if (isset($result['status']) && $result['status']) {
            return response()->json([
                'message' => 'groupchat added successfully!',
            ]);
        } else {
            return response()->json([
                'message' => 'Something wrong!'
            ]);
        }
    }
    public function destroymessage($id)
    {
        $message = GroupChat::find($id);
        // dd($message);
        if ($message) {
            $message->delete();
            return response()->json(['success' => 'Record deleted successfully.']);
        } else {
            return response()->json(['error' => 'Record not found.'], 404);
        }
    }
}

