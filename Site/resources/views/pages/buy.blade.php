@extends('layouts.app')

@section('title', 'Kopen')

@section('content')
<div class="container_row buy_page">
    @if($offers->count() > 0)
        @foreach($offers as $offer)
        <div class="col-sm-6">
            <div class="container_card">
                <div class="card"></div>
                <div class="card offer">
                    <h1 class="title">{{ ucfirst($offer->naam) }}</h1>
                    <div class="info_offer container_row">
                        <div class="left">
                            <img src="images/{{ $offer->foto }}" alt="">
                        </div>
                        <div class="right">
                            <span>prijs: {{ $offer->prijs }} euro</span>
                            <span>aantal: {{ $offer->aantal }}</span>
                            <span><a href="user/{id}">{{ ucfirst($users->where('id',$offer->user_id)->first()->voornaam) . " " . ucfirst($users->where('id',$offer->user_id)->first()->achternaam) }}</a></span>
                        </div>
                    </div>
                    <div class="button-container">
                        <div class="container_row">
                            <div class="button">
                                <a href="/offer/{{ $offer->id }}">Bekijk aanbieding</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div> 
        @endforeach
    @else
        <h1>Er zijn nog geen aanbiedingen toegevoegd</h1>
    @endif
</div>
@endsection