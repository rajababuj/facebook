<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostInterface;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
}
