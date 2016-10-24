<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
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
        $offer->naam = $request::Input('naam');
        $offer->aantal = $request::Input('aantal');
        $offer->prijs = $request::Input('prijs');
        $offer->user_id = Auth::user()->id;

        $errors = [];

        if (Request::hasFile('foto'))
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
                    $offer->save();

                    return view('pages.offer', ['errors' => $errors]);
                }
                else
                {
                    $errors['errormessage'] = 'file does not have the correct extension';
                    return view('pages.index', ['errors' => $errors]);
                }
            }
            else
            {
                $errors['errormessage'] = 'file is not valid';
                return view('pages.index', ['errors' => $errors]);
            }
        }
        else
        {
            $errors['errormessage'] = 'no file selected';
            return view('pages.index', ['errors' => $errors]);
        }

    }
}
