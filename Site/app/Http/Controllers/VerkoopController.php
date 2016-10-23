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

        $errors = [];

        if ($request->hasFile('foto'))
        {
            if(Request::file('foto')->isValid())
            {
                $extension = Request::file('foto')->getClientOriginalExtension();
                if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'jpe' || $extension = 'png')
                {
                    $image = Request::file('foto');
                    $destinationPath = 'images';
                    $imageName = Auth::user()->id . "-1." . $extension;
                    Request::file('foto')->move($destinationPath, $imageName);
                    $offer->foto = $imageName;
                }
                else
                {
                    $errors['errormessage'] = 'file 1 does not have the correct extension';
                }
            }
            else
            {
                $errors['errormessage'] = 'file 1 is not valid';
                return view('upload');
            }
        }
        else
        {
            $errors['errormessage'] = 'no file selected';
            return view('upload');
        }

        $offer->save();

        return view('pages.offer', ['errors' => $errors]);
    }
}
