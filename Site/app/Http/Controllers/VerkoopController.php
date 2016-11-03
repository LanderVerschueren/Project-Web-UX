<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use App\Http\Requests;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Facades\DB;


class VerkoopController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $offers = Offer::all();
        return view('pages.offer', ['offers' => $offers]);
    }

    public function nieuw()
    {
        return view('pages.nieuw');
    }

    public function nieuwOffer(Request $request)
    {
        $this->validate($request, [
            'naam' => 'required|max:1024',
            'aantal' => 'required|integer|max:100',
            'prijs' => 'required|integer|max:50',
        ]);

        $offer = new Offer();
        $offer->naam = $request->input('naam');
        $offer->aantal = $request->input('aantal');
        $offer->prijs = $request->input('prijs');
        $offer->user_id = Auth::user()->id;

        $errors = [];



        if ($request->hasFile('foto'))
        {
            if($request->file('foto')->isValid())
            {
                $this->validate($request, [
                    'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                    'foto2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                    'foto3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                ]);
                    $image = $request->file('foto');
                    $destinationPath = 'images';
                    $imageName = Auth::user()->id . "-" . strval(Offer::all()->count()+1) . "-1." . $image->getClientOriginalExtension();
                    $request->file('foto')->move($destinationPath, $imageName);
                    $offer->foto = $imageName;

                    if ($request->hasFile('foto2'))
                    {
                        if($request->file('foto2')->isValid())
                        {

                                $image = $request->file('foto2');
                                $destinationPath = 'images';
                                $imageName = Auth::user()->id . "-" . strval(Offer::all()->count()+1) . "-2." . $image->getClientOriginalExtension();
                                $request->file('foto2')->move($destinationPath, $imageName);
                                $offer->foto2 = $imageName;

                                if ($request->hasFile('foto3')) {
                                    if ($request->file('foto3')->isValid()) {
                                            $image = $request->file('foto3');
                                            $destinationPath = 'images';
                                            $imageName = Auth::user()->id . "-" . strval(Offer::all()->count() + 1) . "-3." . $image->getClientOriginalExtension();
                                            $request->file('foto3')->move($destinationPath, $imageName);
                                            $offer->foto3 = $imageName;

                                            $offer->save();
                                            $offers = Offer::all();
                                            return view('pages.offer', ['errors' => $errors, 'offers' => $offers]);

                                    } else {
                                        $errors['errormessage'] = 'file is not valid';
                                        return view('pages.index', ['errors' => $errors]);
                                    }
                                }
                                $offer->save();
                                $offers = Offer::all();
                                return view('pages.offer', ['errors' => $errors, 'offers' => $offers]);
                        }
                        else
                        {
                            $errors['errormessage'] = 'file 2 is not valid';
                            return view('pages.index', ['errors' => $errors]);
                        }
                    }

                    $offer->save();
                    $offers = Offer::all();
                    return view('pages.offer', ['errors' => $errors, 'offers' => $offers]);
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
