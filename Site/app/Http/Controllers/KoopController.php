<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KoopController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        return view('pages.buy');
    }
}
