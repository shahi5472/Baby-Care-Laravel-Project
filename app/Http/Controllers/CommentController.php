<?php

namespace App\Http\Controllers;

use App\Comment;
use App\UserReview;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Comment::create([
            'message' => $request->comment_message,
            'post_id' => $request->reviewId,
            'user_id' => $request->userId,
        ]);
        return redirect()->back();
    }

    public function show($id)
    {
        $data = UserReview::where('id', $id)->with(['comments'])->first();
        return view('comment.view', compact('data'));
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
        //
    }
}
