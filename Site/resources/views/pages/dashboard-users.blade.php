@extends('layouts.app')

@section('title', 'Dashboard - Users')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h1>Users</h1>
    </div>
    <div class="panel-body table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>voornaam</th>
                    <th>achternaam</th>
                    <th>email</th>
                    <th>admin</th>
                    <th>deleted</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->voornaam }}</td>
                    <td>{{ $user->achternaam }}</td>
                    <td>{{ $user->email }}</td>
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
                    @if($user->deleted_at == null)
                        <td><a href="\dashboard\users\delete\{{ $user->id }}"><i class="fa fa-times-circle fa-lg" style="cursor: pointer;color: red" aria-hidden="true"></i></a></td>
                    @else
                        <td><a href="\dashboard\users\re_add\{{ $user->id }}"><i class="fa fa-plus-circle fa-lg" style="cursor: pointer;color: green" aria-hidden="true"></i></a></td>
                    @endif
                    <td><a href="\dashboard\users\edit\{{ $user->id }}"><i class="fa fa-pencil-square-o fa-lg" style="cursor: pointer;color: green" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection