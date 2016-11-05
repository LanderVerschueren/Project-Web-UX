@extends('layouts.app')

@section('title', 'Registreer')

@section('content')
<div class="container_row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
        <div class="container_card">
            <div class="card"></div>
            <div class="card offer">
                <h1 class="title">Registreer</h1>
                <div class="container_row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('voornaam') ? ' has-error' : '' }}">
                                <label for="voornaam" class="col-md-4 control-label">Voornaam</label>

                                <div class="col-md-6">
                                    <input id="voornaam" type="text" class="form-control" name="voornaam" value="{{ old('voornaam') }}" required autofocus>

                                    @if ($errors->has('voornaam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('voornaam') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('achternaam') ? ' has-error' : '' }}">
                                <label for="achternaam" class="col-md-4 control-label">Achternaam</label>

                                <div class="col-md-6">
                                    <input id="achternaam" type="text" class="form-control" name="achternaam" value="{{ old('achternaam') }}" required autofocus>

                                    @if ($errors->has('achternaam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('achternaam') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Adres</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('adres') ? ' has-error' : '' }}">
                                <label for="adres" class="col-md-4 control-label">Adres</label>

                                <div class="col-md-6">
                                    <input id="adres" type="text" class="form-control" name="adres" value="{{ old('adres') }}" required autofocus>

                                    @if ($errors->has('adres'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adres') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('woonplaats') ? ' has-error' : '' }}">
                                <label for="woonplaats" class="col-md-4 control-label">Woonplaats</label>

                                <div class="col-md-6">
                                    <input id="woonplaats" type="text" class="form-control" name="woonplaats" value="{{ old('woonplaats') }}" required autofocus>

                                    @if ($errors->has('woonplaats'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('woonplaats') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                                <label for="postcode" class="col-md-4 control-label">Postcode</label>

                                <div class="col-md-6">
                                    <input id="postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode') }}" required autofocus>

                                    @if ($errors->has('postcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Paswoord</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Bevestig Paswoord</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="button-container">
                                    <button type="submit">
                                        <span>Registreer</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div> 
    </div>
</div>
@endsection
