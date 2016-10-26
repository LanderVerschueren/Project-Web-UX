<?php

namespace App\Http\Controllers;

use App\User;
use App\Offer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;



class dashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('pages.dashboard');
    }

    public function users()
    {
        return view('pages.dashboard-users');
    }

    public function offers()
    {
        return view('pages.dashboard-offers');
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


        return redirect('dashboard/users');
    }

    public function offerDelete($id)
    {


        return redirect('dashboard/offers');
    }

    public function editOffer($id)
    {
        //code voor saven van geupdate offer


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
}
