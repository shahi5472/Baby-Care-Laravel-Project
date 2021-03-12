<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function make_admin($id)
    {
        $table = User::find($id);
        $table->userType = 'Admin';
        $table->save();
        return redirect()->back();
    }

    public function make_user($id)
    {
        $table = User::find($id);
        $table->userType = 'User';
        $table->save();
        return redirect()->back();
    }

    public function edit_user($id)
    {
        $user = User::find($id);
        return view('admin.profile.edit', compact('user'));
    }

    public function update_user(Request $request, $id)
    {
        $imageName = "IMG_" . rand(10000000000, 9999999999999) . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $imageName;
        $user->save();
        return redirect()->back();
    }
}
