@extends('layouts.app')

@section('title', 'Userprofile')

@section('content')
    <div class="container_column">
        <div class="card"></div>
        <div class="card offer">
            <p>{{ $user->voornaam  . " " . $user->achternaam}}</p>
            <p>{{ $user->email }}</p>
            <p>{{ $user->adres . ', ' . $user->woonplaats . " " . $user->postcode }}</p>
            @if($user->admin == true)
                <p>Deze user is admin!</p>
            @endif
            <button>
                <a href="/messages/{{$user->id}}">Send message</a>
            </button>
        </div>
    </div>
@endsection