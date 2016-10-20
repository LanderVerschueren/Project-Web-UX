<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function nieuwOffer(Request $request)
    {
        $offer = new Offer();
        $offer->naam = $request->input('naam');
        $offer->aantal = $request->input('aantal');
        $offer->prijs = $request->input('prijs');
        $offer->user_id = Auth::user()->id;
        $offer->foto = 'image1.png';
        $offer->save();

        return view('pages.offer');
    }
}
