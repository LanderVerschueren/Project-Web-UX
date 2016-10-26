<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use App\Http\Requests;
use App\Offer;
use App\User;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    //
    public function index(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $searchResults = Offer::where('naam', 'like', '%'.$searchTerm.'%')->get();
        $users = User::all();

        return view('pages.search', ['searchTerm' => $searchTerm, 'searchResults' => $searchResults, 'users' => $users]);
    }
}
