<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
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
        $offers = Offer::all();
        $users = User::all();
        return view('pages.buy', ['offers' => $offers, 'users' => $users]);
    }

    public function detail($id) {
        $offer = Offer::find($id);
        $buyingUser = Auth::user();
        $boughtFromUser = User::where('id', $offer->user_id)->first();
        $error = '';

        return view('pages.buy_detail', ['offer' => $offer, 'buyingUser' => $buyingUser, 'boughtFromUser' => $boughtFromUser, 'error' => $error]);
    }

    public function buyOffer($id, Request $request) {
        $offer = Offer::find($id);
        $buyingUser = Auth::user();
        $boughtFromUser = User::where('id', $offer->user_id)->first();
        $error = '';

        $this->validate($request, [
            'aantal' => 'required|integer|max:100'
        ]);

        $userWantsAmount = $request->input('aantal');

        if($userWantsAmount <= $offer->aantal)
        {
            //User buys the offer
            $offer->aantal -= $userWantsAmount;
            $offer->save();
            if($offer->aantal == 0)
            {
                $offer->delete();
            }

        }
        else
        {
            $error = 'You are trying to buy more then the user is offering';
            return view('pages.buy_detail', ['offer' => $offer, 'buyingUser' => $buyingUser, 'boughtFromUser' => $boughtFromUser, 'error' => $error]);
        }
    }
}
