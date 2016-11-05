@extends('layouts.app')

@section('title', 'Aanbieden - Jouw toegevoegde offers')

@section('content')
<div class="container_column offer_page">
    @if($offers->count() > 0)
        @if($offers->where('user_id', Auth::user()->id)->count() > 0)
            <div class="button-container offer-container">
                <div class="container_row">
                    <div class="button">
                        <a href="/nieuw">Post een nieuwe aanbieding</a>
                    </div>          

                </div>
            </div>
            

            <div class="container_row">
            @foreach($offers as $offer)
                @if($offer->user_id == Auth::user()->id)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="container_card">
                            <div class="card"></div>
                            <div class="card offer">
                                <h2 class="title">{{ ucfirst($offer->naam) }}</h2>                                    
                                <div class="info_offer container_row">
                                    <div class="left">
                                        <img class="pictureModal1" src="images/{{ $offer->foto }}" alt="">
                                    </div>
                                    <div class="right">
                                        <span class="borders">Prijs: &euro;{{ $offer->prijs }}</span>
                                        <span class="borders">Aantal: {{ $offer->aantal }}</span>
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
                @endif 
            @endforeach

                </div> 
        @else
            <h1>Er zijn nog geen aanbiedingen toegevoegd</h1>
        @endif
    @endif
</div>
@endsection
