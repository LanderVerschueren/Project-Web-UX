<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class dashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('pages.dashboard');
    }

    public function users()
    {
        return view('pages.dashboard-users');
    }

    public function offers()
    {
        return view('pages.dashboard-offers');
    }

    public function userEdit($id)
    {
        return view('pages.dashboard-user-edit', ['user' => \App\User::findOrFail($id)]);
    }

    public function offerEdit($id)
    {
        return view('pages.dashboard-offer-edit',['offer' => \App\Offer::findOrFail($id)]);
    }
}
