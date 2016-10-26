<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $offer = DB::table('offers')->get()->where('id', $id);
        return view('pages.buy_detail', ['offers' => $offer]);
    }
}
