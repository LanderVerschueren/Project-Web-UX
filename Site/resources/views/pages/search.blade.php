@extends('layouts.app')

@section('title', 'Zoeken')

@section('content')
<<<<<<< HEAD
<div class="container_column">
    @if($searchResults->count() > 0)
        @foreach($searchResults as $result)
        <div class="offer container_column panel panel-default">
            <div class="title_offer panel-heading">
                <h2>U zocht: "{{ $searchTerm }}"</h2>
            </div>
            <div class="info_offer container_row panel-body">
                <div class="left">
                    <img src="images/{{ $result->foto }}" alt="">
                </div>
                <div class="right">
                    <span>prijs: {{ $result->prijs }} euro</span>
                    <span>aantal: {{ $result->aantal }}</span>
                    <span><a href="user/{id}">{{ ucfirst($users->where('id',$result->user_id)->first()->voornaam) . " " . ucfirst($users->where('id',$result->user_id)->first()->achternaam) }}</a></span>
                </div>
            </div>
            <div class="panel-footer">
                <a href="/offer/{{ $result->id }}">Bekijk aanbieding</a>
            </div>
        </div>    
        @endforeach
    @else
        <h1>Er zijn nog geen aanbiedingen gevonden</h1>
    @endif
</div>
@endsection