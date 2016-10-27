@extends('layouts.app')

@section('title', 'Userprofile')

@section('content')
    <div class="container_column">
        <p>{{ $user->voornaam  . " " . $user->achternaam}}</p>
        <p>{{ $user->email }}</p>
        <p>{{ $user->adres . ', ' . $user->woonplaats . " " . $user->postcode }}</p>
        @if($user->admin == true)
            <p>Deze user is admin!</p>
        @endif
    </div>
@endsection