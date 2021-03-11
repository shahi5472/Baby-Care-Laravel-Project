<?php

namespace App\Http\Controllers;

use App\UserReview;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    public function store(Request $request)
    {
        $table = new UserReview();
        $table->name = $request->name;
        $table->review = $request->review;
        $table->save();
        return redirect()->back();
    }


    public function approve($id)
    {
        $table = UserReview::find($id);
        $table->isApproved = 'YES';
        $table->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $table = UserReview::find($id);
        $table->delete();
        return redirect()->back();
    }


}
