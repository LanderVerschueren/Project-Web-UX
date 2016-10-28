<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Support\Facades\Request;

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
                    $imageName = Auth::user()->id . "-" . strval(Offer::all()->count()+1) . "-1." . $extension;
                    Request::file('foto')->move($destinationPath, $imageName);
                    $offer->foto = $imageName;

                    if (Request::hasFile('foto2'))
                    {
                        if(Request::file('foto2')->isValid())
                        {
                            $extension = Request::file('foto2')->getClientOriginalExtension();
                            if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'jpe' || $extension = 'png')
                            {
                                $image = Request::file('foto2');
                                $destinationPath = 'images';
                                $imageName = Auth::user()->id . "-" . strval(Offer::all()->count()+1) . "-2." . $extension;
                                Request::file('foto2')->move($destinationPath, $imageName);
                                $offer->foto2 = $imageName;

                                if (Request::hasFile('foto3')) {
                                    if (Request::file('foto3')->isValid()) {
                                        $extension = Request::file('foto3')->getClientOriginalExtension();
                                        if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'jpe' || $extension = 'png') {
                                            $image = Request::file('foto3');
                                            $destinationPath = 'images';
                                            $imageName = Auth::user()->id . "-" . strval(Offer::all()->count() + 1) . "-3." . $extension;
                                            Request::file('foto3')->move($destinationPath, $imageName);
                                            $offer->foto3 = $imageName;

                                            $offer->save();
                                            $offers = Offer::all();
                                            return view('pages.offer', ['errors' => $errors, 'offers' => $offers]);
                                        } else {
                                            $errors['errormessage'] = 'file does not have the correct extension';
                                            return view('pages.indfex', ['errors' => $errors]);
                                        }
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
                                $errors['errormessage'] = 'file 2 does not have the correct extension';
                                return view('pages.index', ['errors' => $errors]);
                            }
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
