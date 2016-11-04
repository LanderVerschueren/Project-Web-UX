@extends('layouts.app')

@section('title', 'Messages')

@section('content')
<div class="container_column">
    @if($messages->count() > 0)
        @foreach($messages as $message)
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="container_card">
                <div class="card"></div>
                <div class="card offer">
                    <h1 class="title">{{ ucfirst($message->subject) }}</h1>
                    <div class="messages container_column">
                        <span class="borders">Van: <a href="/user/{{$users->where('id', $message->sender_id)->first()->id}}">{{ucfirst($users->where('id', $message->sender_id)->first()->voornaam) . ' ' . ucfirst($users->where('id', $message->sender_id)->first()->achternaam)}}</a></span>
                        <span class="borders">{{$message->message}}</span>
                    </div>
                </div>  
            </div>
        </div>
        @endforeach
    @else
        <h1>You haven't received any messages yet</h1>
    @endif

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="container_card">
            <div class="card"></div>
            <div class="card offer">
                <h1 class="title">Stuur een bericht:</h1>
                {{ Form::open(array('url' => '/message/send')) }}
                {{ csrf_field() }}
                <div class="messages container_column">       
                    {!! Form::label('sender', 'Versturen naar:') !!}
                    {!! Form::select('sender', $usersList) !!}

                    {!! Form::label('message', 'Bericht:') !!}
                    {!! Form::textarea('message') !!}

                    <div class="button-container button_koop">
                        <button type="submit">
                            <span>Verzend</span>
                        </button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>  
        </div>
    </div>
</div>
@endsection