@extends('layouts.app')

@section('title', 'Dashboard - Users')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="text-center">dashboard users</h1>
                        <table class="dashboard-table">
                            <tr>
                                <th>id</th>
                                <th>voornaam</th>
                                <th>achternaam</th>
                                <th>email</th>
                                <th>adres</th>
                                <th>woonplaats</th>
                                <th>postcode</th>
                                <th>admin</th>
                                <th>deleted</th>
                            </tr>
                            @foreach(\App\User::all() as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->voornaam }}</td>
                                    <td>{{ $user->achternaam }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->adres }}</td>
                                    <td>{{ $user->woonplaats }}</td>
                                    <td>{{ $user->postcode }}</td>
                                    @if($user->admin == false)
                                        <td>Nee</td>
                                    @else
                                        <td>Ja</td>
                                    @endif
                                    @if($user->deleted_at == null)
                                        <td>Nee</td>
                                    @else
                                        <td>Ja</td>
                                    @endif
                                    <td><a href=""><i class="fa fa-times-circle fa-lg" style="cursor: pointer;color: red" aria-hidden="true"></i></a></td>
                                    <td><a href="\dashboard\users\edit\{{ $user->id }}"><i class="fa fa-pencil-square-o fa-lg" style="cursor: pointer;color: green" aria-hidden="true"></i></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection