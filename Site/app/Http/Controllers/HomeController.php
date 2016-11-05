<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modalTriggered = false;
        return view('pages.index', ['modalTriggered' => $modalTriggered]);
    }

    public function login()
    {
        if( Auth::check() ) {
            return redirect('/');
        }
        else {
            $modalTriggered = true;
            return view('pages.index', ['modalTriggered' => $modalTriggered]);
        }
    }
}
