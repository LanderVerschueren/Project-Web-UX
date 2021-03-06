@extends('layouts.app')

@section('title', 'Kopen')

@section('content')
<div class="container_row buy_page">
    @if($offers->count() > 0)
        @foreach($offers as $offer)
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container_card">
                <div class="card"></div>
                <div class="card offer">
                    <h2 class="title">{{ ucfirst($offer->naam) }}</h2>
                    <div class="info_offer container_row">
                        <div class="left">
                            <img class='pictureModal1' src="images/{{ $offer->foto }}" alt="">
                        </div>
                        <div class="right">
                            <span class="borders">Prijs: &euro;{{ $offer->prijs }}</span>
                            <span class="borders">Aantal: {{ $offer->aantal }}</span>
                            <span class="borders"><a href="user/{{$offer->user_id}}">{{ ucfirst($users->where('id',$offer->user_id)->first()->voornaam) . " " . ucfirst($users->where('id',$offer->user_id)->first()->achternaam) }}</a></span>
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
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container_card">
                <div class="card"></div>
                <div class="card offer">
                    <h2 class="title">Er zijn nog geen aanbiedingen toegevoegd!</h2>
                </div>  
            </div>
        </div> 
    @endif
</div>
@endsection