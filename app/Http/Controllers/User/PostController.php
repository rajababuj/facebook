<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostInterface;
use Illuminate\Support\Facades\Log;
use App\Models\GroupChat;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;



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


    public function copyMessage($id)
    {
        $message = GroupChat::find($id);
        // dd($message)
        if ($message) {
            $message = $message->message;

            return response()->json(['success' => 'Message copied successfully.']);
        } else {
            return response()->json(['error' => 'Record not found.'], 404);
        }
    }


    public function destroygroup($id)
    {

        $group = Group::find($id);

       
        if (!$group) {
            return response()->json(['error' => 'Group not found.'], 404);
        }

       
        if (Auth::user()->id !== $group->is_admin) {
            return response()->json(['error' => 'Permission denied.'], 403);
        }

        $group->delete();

        return response()->json(['success' => 'Group deleted successfully.']);
    }

    public function getMembers($id)
    {
        $group = Group::find($id);
        dd($group);
        if (!$group) {
            return response()->json(['error' => 'Group not found.'], 404);
        }
        $members = $group->members;

        return response()->json(['members' => $members]);
    }




    // public function destroygroup(Request $request)
    // {
    //     $data = $request->all;
    //     $result = $this->postRepository->destroygroup($data);

    //     if ($result && isset($result['status'])) {
    //         return response()->json([
    //             'message' => 'Group soft deleted successfully!'
    //         ]);
    //     } else {
    //         return response()->json([
    //             'message' => 'Group not found!'
    //         ]);
    //     }
    // }

}
