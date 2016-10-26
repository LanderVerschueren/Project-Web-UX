@extends('layouts.app')

@section('title', 'Kopen')

@section('content')
<div class="container_column">
    @if($offers->count() > 0)
        @foreach($offers as $offer)
        <div class="offer container_column panel panel-default">
            <div class="title_offer panel-heading">
                <h2>{{ ucfirst($offer->naam) }}</h2>
            </div>
            <div class="info_offer container_row panel-body">
                <div class="left">
                    <img src="images/{{ $offer->foto }}" alt="">
                </div>
                <div class="right">
                    <span>prijs: {{ $offer->prijs }} euro</span>
                    <span>aantal: {{ $offer->aantal }}</span>
                    <span><a href="user/{id}">{{ ucfirst($users->where('id',$offer->user_id)->first()->voornaam) . " " . ucfirst($users->where('id',$offer->user_id)->first()->achternaam) }}</a></span>
                </div>
            </div>
            <div class="panel-footer">
                <a href="/offer/{{ $offer->id }}">Bekijk aanbieding</a>
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
                    <a href="user/{id}">{{ User::find($offer->user_id)->achternaam }} {{ User::find($offer->user_id)->voornaam }}</a>
                </div>
            </div>

            -->