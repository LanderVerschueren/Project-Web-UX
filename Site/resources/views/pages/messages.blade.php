@extends('layouts.app')

@section('title', 'Messages')

@section('content')
    @if($messages->count() > 0)
        @foreach($messages as $message)
            <div class="card"></div>
            <div class="card offer">
                <h2>{{$message->subject}}</h2>
                <h3><a href="/user/{{$users->where('id', $message->sender_id)->first()->id}}">{{$users->where('id', $message->sender_id)->first()->voornaam . ' ' . $users->where('id', $message->sender_id)->first()->achternaam}}</a></h3>
                <p>{{$message->message}}</p>
            </div>
        @endforeach
    @else
        <h1>You haven't received any messages yet</h1>
    @endif

    {{ Form::open(array('url' => '/message/send')) }}
        {{ csrf_field() }}
        {!! Form::label('sender', 'sender:') !!}
        {!! Form::select('sender', $usersList) !!}

        {!! Form::label('message', 'Message:') !!}
        {!! Form::textarea('message') !!}

        {!! Form::submit('send message') !!}
    {{ Form::close() }}
@endsection