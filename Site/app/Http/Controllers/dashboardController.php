<?php

namespace App\Http\Controllers;

use App\User;
use App\Offer;
use Illuminate\Http\Request;
use File;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;



class dashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function users()
    {
        $users = User::withTrashed()->get();
        return view('pages.dashboard-users', ['users' => $users]);
    }

    public function offers()
    {
        $offers = Offer::all();
        $users = User::all();
        return view('pages.dashboard-offers', ['offers' => $offers, 'users' => $users]);
    }

    public function userEdit($id)
    {
        return view('pages.dashboard-user-edit', ['user' => User::findOrFail($id)]);
    }

    public function offerEdit($id)
    {
        return view('pages.dashboard-offer-edit',['offer' => Offer::findOrFail($id)]);
    }

    public function userDelete($id)
    {
        $user = User::findOrFail($id);
        if($user != null)
        {
            $user->delete();


            $offersFromUser = Offer::where('user_id', $user->id)->get();
            foreach($offersFromUser as $offer)
            {
                if($offer->deleted_at == null)
                {
                    $offer->delete();
                }
            }
        }

        return redirect('dashboard/users');
    }

    public function offerDelete($id)
    {
        $offer = Offer::findOrFail($id);
        if($offer != null)
        {
            $offer->delete();
        }

        return redirect('dashboard/offers');
    }

    public function editOffer(Request $request, $id)
    {
        //code voor saven van geupdate offer
        $offer = Offer::find($id);

        $offer->naam = $request->input('naam');
        $offer->aantal = $request->input('aantal');
        $offer->prijs = $request->input('prijs');

        if($request->hasFile('foto'))
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
                    $imageName = $offer->user_id . "-" . $offer->id . "-1." . $image->getClientOriginalExtension();

                    //delete foto that was already there
                    File::delete('images/' . $imageName);

                    $request->file('foto')->move($destinationPath, $imageName);
                    $offer->foto = $imageName;

                    //volgende fotos

                        if($request->hasFile('foto2')){
                            if ($request->file('foto2')->isValid()){
                                    $image = $request->file('foto2');
                                    $destinationPath = 'images';
                                    $imageName = $offer->user_id . "-" . $offer->id . "-2." . $extension;

                                    //delete foto that was already there
                                    File::delete('images/' . $imageName);

                                    $request->file('foto2')->move($destinationPath, $imageName);
                                    $offer->foto2 = $imageName;

                                    if($request->hasFile('foto3')){
                                        if ($request->file('foto3')->isValid()){
                                                $image = $request->file('foto3');
                                                $destinationPath = 'images';
                                                $imageName = $offer->user_id . "-" . $offer->id . "-3." . $extension;

                                                //delete foto that was already there
                                                File::delete('images/' . $imageName);

                                                $request->file('foto3')->move($destinationPath, $imageName);
                                                $offer->foto3 = $imageName;
                                        }else{  dd('file not valid: 3');    }
                                    }
                            }else{  dd('file not valid: 2');    }
                        }
            }
        }

        $offer->save();
        return redirect('dashboard/offers');
    }

    public function editUser(Request $request, $id)
    {
        //code voor saven van geupdate user
        $user = User::find($id);

        $user->voornaam = $request->input('voornaam');
        $user->achternaam = $request->input('achternaam');
        $user->email = $request->input('email');
        $user->adres = $request->input('adres');
        $user->woonplaats = $request->input('woonplaats');
        $user->postcode = $request->input('postcode');
        if($request->input('admin') == null)
        {
            $user->admin = false;
        }
        else
        {
            $user->admin = true;
        }

        $user->save();
        return redirect('dashboard/users');
    }

    public function userReAdd($id)
    {
        $user = User::onlyTrashed()->where('id', $id)->first();
        if($user != null)
        {
            $user->restore();

            $offersFromUser = Offer::onlyTrashed()->where('user_id', $user->id)->get();
            foreach($offersFromUser as $offer)
            {
                if($offer->deleted_at != null)
                {
                    $offer->restore();
                }
            }
        }

        return redirect('dashboard/users');
    }

    public function offerReAdd($id)
    {
        $offer = Offer::onlyTrashed()->where('id', $id)->first();
        if($offer != null)
        {
            $offer->restore();
        }

        return redirect('dashboard/offers');
    }
}
