@extends('layouts.app')

@section('title', 'Dashboard - Offers')
    <h1>Dashboard - Offers</h1>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <h1 class="text-center">dashboard offers</h1>
                        <table class="dashboard-table">
                            <tr>
                                <th>id</th>
                                <th>naam</th>
                                <th>aantal</th>
                                <th>prijs</th>
                                <th>foto</th>
                                <th>foto 2</th>
                                <th>foto 3</th>
                                <th>user</th>
                                <th>deleted</th>
                            </tr>
                            @foreach(\App\Offer::all() as $offer)
                                <tr>
                                    <td>{{ $offer->id }}</td>
                                    <td>{{ $offer->naam }}</td>
                                    <td>{{ $offer->aantal }}</td>
                                    <td>{{ $offer->prijs }}</td>
                                    <td>{{ $offer->foto }}</td>
                                    <td>{{ $offer->foto2 }}</td>
                                    <td>{{ $offer->foto3 }}</td>
                                    <td><a href="user/{id}">{{ \App\User::find($offer->user_id)->achternaam . \App\User::find($offer->user_id)->voornaam }}</a></td>
                                    @if($offer->deleted_at == null)
                                        <td>Nee</td>
                                    @else
                                        <td>Ja</td>
                                    @endif
                                    <td><a href=""><i class="fa fa-times-circle fa-lg" style="cursor: pointer;color: red" aria-hidden="true"></i></a></td>
                                    <td><a href="\dashboard\offers\edit\{{ $offer->id }}"><i class="fa fa-pencil-square-o fa-lg" style="cursor: pointer;color: green" aria-hidden="true"></i></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection