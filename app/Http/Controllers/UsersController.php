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
}
