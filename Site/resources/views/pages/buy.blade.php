@extends('layouts.app')

@section('title', 'Kopen')

@section('content')
<div class="container_column">
    @if($offers->count() > 0)
        @foreach($offers as $offer)
            <div class="container_row offer">
                <div class="left">
                    <img src="images/{{ $offer->foto }}" alt="">
                </div>
                <div class="right">
                    <h2>{{ $offer->naam }}</h2>
                    <p>prijs: {{ $offer->prijs }} euro</p>
                    <p>aantal: {{ $offer->aantal }}</p><br>
                    <a href="user/{id}">{{ $users->where('id',$offer->user_id)->first()->voornaam . $users->where('id',$offer->user_id)->first()->achternaam }}</a>
                </div>
            </div>
        @endforeach
    @else
        <h1>Er zijn nog geen aanbiedingen toegevoegd</h1>
    @endif
</div>
@endsection


<!--
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

            -->