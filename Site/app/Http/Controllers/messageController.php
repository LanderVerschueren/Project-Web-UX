<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class messageController extends Controller
{
    //
    public function index($id)
    {
        $messages = DB::table('messages')->where('user_id', Auth::user()->id)->get();
        $users = User::all();
        if($id != null)
        {
            $userToSend = DB::table('users')->where('id', $id)->first();
        }
        else{
            $userToSend = null;
        }
        return view('pages.messages',['messages' => $messages, 'users' => $users, 'userToSend' => $userToSend]);
    }
}
