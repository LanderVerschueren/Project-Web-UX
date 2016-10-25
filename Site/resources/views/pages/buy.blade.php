@extends('layouts.app')

@section('pageTitle')
    <h1>Aanbiedingen</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if(\App\Offer::all()->count() > 0)
                            @foreach(\App\Offer::all() as $offer)
                                <div class="offerpanel col-md-6">
                                    <div class="col-md-8 offerpanel-image-body">
                                        <img class="offerpanel-image" src="images/{{ $offer->foto }}">
                                    </div>
                                    <div class="col-md-4 offerpanel-info">
                                        <h2>{{ $offer->naam }}</h2>
                                        <p>prijs: {{ $offer->prijs }} euro</p>
                                        <p>aantal: {{ $offer->aantal }}</p><br>
                                        <a href="user/{id}">{{ \App\User::find($offer->user_id)->achternaam }} {{ \App\User::find($offer->user_id)->voornaam }}</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h1>Er zijn nog geen aanbiedingen toegevoegd</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection