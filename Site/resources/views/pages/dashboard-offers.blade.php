@extends('layouts.app')

@section('title', 'Dashboard - Offers')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h1>Users</h1>
    </div>
    <div class="panel-body table-responsive-vertical">
        <table class="table table-hover">
            <thead>
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
            </thead>
            <tbody>
                @foreach($offers as $offer)
                <tr>
                    <td>{{ $offer->id }}</td>
                    <td>{{ $offer->naam }}</td>
                    <td>{{ $offer->aantal }}</td>
                    <td>{{ $offer->prijs }}</td>
                    <td>{{ $offer->foto }}</td>
                    <td>{{ $offer->foto2 }}</td>
                    <td>{{ $offer->foto3 }}</td>
                    <td><a href="user/{id}">{{ $users->find($offer->user_id)->achternaam . $users->find($offer->user_id)->voornaam }}</a></td>
                    @if($offer->deleted_at == null)
                    <td>Nee</td>
                    @else
                    <td>Ja</td>
                    @endif
                    <td><a href=""><i class="fa fa-times-circle fa-lg" style="cursor: pointer;color: red" aria-hidden="true"></i></a></td>
                    <td><a href="\dashboard\offers\edit\{{ $offer->id }}"><i class="fa fa-pencil-square-o fa-lg" style="cursor: pointer;color: green" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection