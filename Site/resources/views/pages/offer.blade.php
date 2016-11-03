@extends('layouts.app')

@section('title', 'Aanbieden')

@section('content')
<div class="container_column offer_page">
    @if($offers->count() > 0)
        @if($offers->where('user_id', Auth::user()->id)->count() > 0)
            <h2>Jouw toegevoegde offers</h2>

            @foreach($offers as $offer)
                @if($offer->user_id == Auth::user()->id)
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
                            <span></span>
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
                @endif 
            @endforeach
        @else
            <h1>Er zijn nog geen aanbiedingen toegevoegd</h1>
        @endif
    @endif
    <a href="/nieuw">Post nieuwe aanbieding</a>
</div>
@endsection
