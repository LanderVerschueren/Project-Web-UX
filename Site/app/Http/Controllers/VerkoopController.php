<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VerkoopController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.offer');
    }

    public function nieuw()
    {
        return view('pages.nieuw');
    }
}
