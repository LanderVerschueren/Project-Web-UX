@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="text-center">searching for {{ $searchTerm }}</h1>
                        @if($searchResults->count() > 0)
                            @foreach($searchResults as $result)
                                <div class="offerpanel col-md-6">
                                    <div class="col-md-8 offerpanel-image-body">
                                        <img class="offerpanel-image" src="images/{{ $result->foto }}">
                                    </div>
                                    <div class="col-md-4 offerpanel-info">
                                        <h2>{{ $result->naam }}</h2>
                                        <p>prijs: {{ $result->prijs }} euro</p>
                                        <p>aantal: {{ $result->aantal }}</p><br>
                                        <a href="user/{id}">{{ \App\User::find($result->user_id)->achternaam }} {{ \App\User::find($result->user_id)->voornaam }}</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h2>Geen aanbiedingen gevonden die te maken hebben met {{$searchTerm}}</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection