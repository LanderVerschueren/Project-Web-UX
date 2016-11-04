@extends('layouts.app')

@section('title', 'Zoeken')

@section('content')
<div class="container_column buy_page">
    <span><h2>U zocht: {{ $searchTerm }}</h2></span>
    @if($searchResults->count() > 0)
        @foreach($searchResults as $result)
        <div class="col-sm-6">
            <div class="container_card">
                <div class="card"></div>
                <div class="card offer">
                    <h1 class="title">{{ ucfirst($result->naam) }}</h1>
                    <div class="info_offer container_row">
                        <div class="left">
                            <img class='pictureModal1' src="images/{{ $result->foto }}" alt="">
                        </div>
                        <div class="right">
                            <span class="borders">Prijs: &euro;{{ $result->prijs }}</span>
                            <span class="borders">Aantal: {{ $result->aantal }}</span>
                            <span class="borders"><a href="user/{{$result->user_id}}">{{ ucfirst($users->where('id',$result->user_id)->first()->voornaam) . " " . ucfirst($users->where('id',$result->user_id)->first()->achternaam) }}</a></span>
                        </div>
                    </div>
                    <div class="button-container">
                        <div class="container_row">
                            <div class="button">
                                <a href="/offer/{{ $result->id }}">Bekijk aanbieding</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        @endforeach
    @else
        <h1>Er zijn nog geen aanbiedingen gevonden</h1>
    @endif
</div>
@endsection