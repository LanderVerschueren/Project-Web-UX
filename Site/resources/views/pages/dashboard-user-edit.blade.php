@extends('layouts.app')

@section('title', 'Dashboard - Users')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <h1>Edit User {{ $user->achternaam . ' ' . $user->voornaam }}</h1>
                        <form action="\editUser\{{ $user->id }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="voornaam" class="col-md-4 control-label">Voornaam</label>

                                <div class="col-md-6">
                                    <input id="voornaam" type="text" class="form-control" name="achternaam" value="{{ $user->voornaam }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="achternaam" class="col-md-4 control-label">Achternaam</label>

                                <div class="col-md-6">
                                    <input id="achternaam" type="text" class="form-control" name="achternaam" value="{{ $user->achternaam }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="adres" class="col-md-4 control-label">Adres</label>

                                <div class="col-md-6">
                                    <input id="adres" type="text" class="form-control" name="adres" value="{{ $user->adres }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="woonplaats" class="col-md-4 control-label">Woonplaats</label>

                                <div class="col-md-6">
                                    <input id="woonplaats" type="text" class="form-control" name="woonplaats" value="{{ $user->woonplaats }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="postcode" class="col-md-4 control-label">Postcode</label>

                                <div class="col-md-6">
                                    <input id="postcode" type="text" class="form-control" name="postcode" value="{{ $user->postcode }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="admin" class="col-md-4 control-label">Admin</label>

                                <div class="col-md-6">
                                    @if($user->admin == true)
                                        <input id="admin" type="checkbox" checked="checked" class="form-control" name="admin" value="{{ $user->admin }}" required autofocus>
                                    @else
                                        <input id="admin" type="checkbox" class="form-control" name="admin" value="{{ $user->admin }}" required autofocus>
                                    @endif
                                </div>
                            </div>

                            <input type="submit" value="Save user" name="submit" id="saveUser">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection