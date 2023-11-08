<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CommentInterface;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $input = $request->all();
        $input['comment'] = $request->input('comment');
        $input['user_id'] = auth()->user()->id;

        $comment = Comment::create($input);

        return $comment;
    }

    public function reply(Request $request, Comment $comment)
    {
        // dd($request->all());
        $request->validate([
            'comment' => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['post_id'] = $comment->post_id;
        $input['parent_id'] = $comment->id;

        $comment = Comment::create($input);

        return $comment;
    }
}
