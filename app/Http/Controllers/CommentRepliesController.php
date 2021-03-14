<?php

namespace App\Http\Controllers;

use App\CommentReplies;
use Illuminate\Http\Request;

class CommentRepliesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        CommentReplies::create([
            'comment_id' => $request->commentId,
            'user_id' => $request->userId,
            'message' => $request->reply_message,
        ]);
        return redirect()->back();
    }

    public function show(CommentReplies $commentReplies)
    {
        //
    }

    public function edit(CommentReplies $commentReplies)
    {
        //
    }

    public function update(Request $request, CommentReplies $commentReplies)
    {
        //
    }

    public function destroy(CommentReplies $commentReplies)
    {
        //
    }
}
