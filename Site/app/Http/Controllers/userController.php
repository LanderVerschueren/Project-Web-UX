<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userpage($id)
    {
        $users = User::where('id', $id)->first();
        return view('pages.userPage' ,['user' => $users]);
    }
}
