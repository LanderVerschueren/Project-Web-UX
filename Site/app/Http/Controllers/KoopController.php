<?php

namespace App\Http\Controllers;

use App\Message;
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
        if(Auth::check())
        {
            $buyingUser = Auth::user();
        }
        else
        {
            $buyingUser = 'guest';
        }
        $boughtFromUser = User::where('id', $offer->user_id)->first();
        $error = '';

        return view('pages.buy_detail', ['offer' => $offer, 'buyingUser' => $buyingUser, 'boughtFromUser' => $boughtFromUser, 'error' => $error]);
    }

    public function buyOffer($id, Request $request) {
        $offer = Offer::find($id);
        $buyingUser = Auth::user();
        $boughtFromUser = DB::table('user')->where('id', $offer->user_id)->first();
        $error = '';

        $this->validate($request, [
            'aantal' => 'required|integer'
        ]);

        $userWantsAmount = $request->input('aantal');

        if($userWantsAmount <= $offer->aantal)
        {
            //User buys the offer
            $offer->aantal -= $userWantsAmount;
            $offer->save();

            $messageToSeller = new Message();
            $messageToSeller->message = $buyingUser->voornaam . ' ' . $buyingUser->achternaam . ' heeft net ' . $userWantsAmount . ' stuks van jou ' . $offer->naam . ' besteld.';
            $messageToSeller->user_id = $boughtFromUser->id;
            $messageToSeller->sender_id = $buyingUser->id;
            $messageToSeller->save();

            $messageToBuyer = new Message();
            $messageToBuyer->message = 'Je hebt net ' . $userWantsAmount . ' ' . $offer->naam . ' besteld van ' . $boughtFromUser->voornaam . ' ' . $boughtFromUser->achternaam;
            $messageToBuyer->user_id = $buyingUser->id;
            $messageToBuyer->sender_id = $boughtFromUser->id;
            $messageToBuyer->save();

            if($offer->aantal == 0)
            {
                $messageToSeller->message = 'Je offer is helemaal verkocht en word verwijderd uit de database';
                $messageToSeller->user_id = $boughtFromUser->id;
                $messageToSeller->sender_id = null;
                $messageToSeller->save();

                $offer->delete();
            }


            return redirect()->to('/home');
        }
        else
        {
            $error = 'You are trying to buy more then the user is offering';
            return view('pages.buy_detail', ['offer' => $offer, 'buyingUser' => $buyingUser, 'boughtFromUser' => $boughtFromUser, 'error' => $error]);
        }
    }
}
