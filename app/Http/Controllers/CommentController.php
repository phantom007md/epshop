<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index ()
    {
        return $comments = Comment::all();
    }


    public function store(Request $request)
    {
        Comment::create([
            'body' => $request->body,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
        ]);
    }

    public function show(Comment $comment)
    {
        return $comment;
    }


    public function update(Request $request, Comment $comment)
    {
        $comment->body = $request->body;
        $comment->product_id = $request->product_id;
        $comment->user_id = $request->user_id;

        $comment->save();
    }

    public function destroy(Comment $comment)
    {
        Comment::destroy($comment->id);
    }
}
