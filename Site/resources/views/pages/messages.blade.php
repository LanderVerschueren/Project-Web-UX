@extends('layouts.app')

@section('title', 'Messages')

@section('content')
    @if($messages->count() < 0)
        @foreach($messages as $message)
            <div>
                <h2>{{$message->subject}}</h2>
                <p>{{$message->$message}}</p>
            </div>
        @endforeach
    @else
        <h1>You haven't received any messages yet</h1>
    @endif
@endsection