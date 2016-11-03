<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageController extends Controller
{
    //
    public function index()
    {
        $messages = Message::where('user_id', Auth::user()->id)->get();
        return view('messages',['messages' => $messages]);
    }
}
