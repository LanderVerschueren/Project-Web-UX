@extends('layouts.app')

@section('title', 'Aanbieden')

@section('content')
<div class="container_column">
    @if($offers->count() > 0)
        @if($offers->where('user_id', Auth::user()->id)->count() > 0)
            <h2>Jou toegevoegde offers</h2>

            <a href="/nieuw">Voeg aanbieding toe</a>

            @foreach($offers as $offer)
                @if($offer->user_id == Auth::user()->id)
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
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="/offer/{{ $offer->id }}">Bekijk aanbieding</a>
                    </div>
                </div>   
                @endif 
            @endforeach
        @else
            <h1>Er zijn nog geen aanbiedingen toegevoegd op de site.</h1>
        @endif
    @endif
</div>
@endsection
