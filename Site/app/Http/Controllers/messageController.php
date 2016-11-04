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
    public function index()
    {
        $messages = DB::table('messages')->where('user_id', Auth::user()->id)->get();
        $users = User::all();
        $usersList = User::pluck('achternaam', 'id')->except('id', Auth::user()->id);
        return view('pages.messages',['messages' => $messages, 'users' => $users, 'usersList' => $usersList]);
    }

    public function send(Request $request)
    {
        $sendMessage = new Message();
        $sendMessage->message = $request->input('message');
        $sendMessage->user_id = $request->input('sender');
        $sendMessage->sender_id = Auth::user()->id;
        $sendMessage->save();

        return redirect('/messages');
    }
}
