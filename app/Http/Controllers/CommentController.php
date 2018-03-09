<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index ()
    {
        return $comments = Comment::all();
//        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        Comment::create([
            'body' => $request->body,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('comment.index');
    }

    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        Comment::destroy($comment->id);
        return redirect()->route('comment.index');
    }
}
