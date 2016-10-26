@extends('layouts.app')

@section('title', 'Dashboard - Users')

@section('content')    
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Editing {{ ucfirst($user->voornaam) . " " . ucfirst($user->achternaam) }}</h2>
    </div>
    <div class="panel-body">
        {!! Form::model($user, ['url' => ['/editUser', $user->id]]) !!}
            <div class="form-group">
                {!! Form::label('voornaam', 'Voornaam:') !!}
                {!! Form::text('voornaam', null, array('required', 'class' => 'form-control', 'placeholder' => 'Voornaam')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('achternaam', 'Achternaam:') !!}
                {!! Form::text('achternaam', null, array('required', 'class' => 'form-control', 'placeholder' => 'Achternaam')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, array('required', 'class' => 'form-control', 'placeholder' => 'E-mail Adres')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('adres', 'Straat:') !!}
                {!! Form::text('adres', null, array('required', 'class' => 'form-control', 'placeholder' => 'Straat')) !!}
            </div>            
            <div class="form-group">
                {!! Form::label('woonplaats', 'Woonplaats:') !!}
                {!! Form::text('woonplaats', null, array('required', 'class' => 'form-control', 'placeholder' => 'Woonplaats')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('postcode', 'Postcode:') !!}
                {!! Form::text('postcode', null, array('required', 'class' => 'form-control', 'placeholder' => 'Postcode')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('admin', 'Admin:') !!}
                {!! Form::checkbox('admin', null, true, array('required', 'class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Sla user op') !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
<!--
                            <div class="form-group">
                                <label for="admin" class="col-md-4 control-label">Admin</label>

                                <div class="col-md-6">
                                    @if($user->admin == true)
                                        <input id="admin" type="checkbox" checked="checked" class="form-control" name="admin" value="{{ $user->admin }}">
                                    @else
                                        <input id="admin" type="checkbox" class="form-control" name="admin" value="{{ $user->admin }}">
                                    @endif
                                </div>
                            </div>

                            <input type="submit" value="Save user" name="submit" id="saveUser">
                        </form>-->