@extends('layouts.app')

@section('title', 'Userprofile')

@section('content')
<div class="container_column">
    <div class="card"></div>
    <div class="card offer">
        <h1 class="title">{{ ucfirst($user->voornaam)  . " " . ucfirst($user->achternaam) }}</h1>
        <div class="info_offer container_row">
            <span class="borders">{{ $user->email }}</span>
            <span class="borders">{{ $user->adres . ', ' . $user->woonplaats . " " . $user->postcode }}</span>
            @if($user->admin == true)
            <span class="borders">Deze user is admin!</span>
            @endif
        </div>
        @if(Auth::user()->id != $user->id)
        <div class="button-container">
            <div class="container_row">
                <div class="button">
                    <a href="/messages/{{$user->id}}">Stuur een bericht</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection