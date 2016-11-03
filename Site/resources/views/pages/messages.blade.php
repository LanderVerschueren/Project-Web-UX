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

        <form action="/message/{{$offer->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if($error == '')
                <label for="aantal" class="col-md-4 control-label">Aantal</label>
            @else
                <label for="aantal" class="col-md-4 control-label">Aantal</label>
                <label for="aantal" class="col-md-4 control-label">{{$error}}</label>
            @endif
            <input id="aantal" type="text" class="form-control" name="aantal" required autofocus>

            <input type="submit" value="Buy amount" name="submit">
        </form>
    @else
        <h1>You haven't received any messages yet</h1>
    @endif
@endsection