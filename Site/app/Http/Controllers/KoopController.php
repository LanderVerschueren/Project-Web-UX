<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class KoopController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $offers = DB::table('offers')->get();
        $users = DB::table('users')->get();
        return view('pages.buy', ['offers' => $offers, 'users' => $users]);
    }

    public function detail($id) {
        $offer = Offer::find($id);

        return view('pages.buy_detail', ['offer' => $offer]);
    }
}
