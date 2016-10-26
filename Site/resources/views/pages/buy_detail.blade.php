@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
	<p><img class="temporary" src="/images/{{ $offer->foto }}" alt=""></p>
	<p><img class="temporary" src="/images/{{ $offer->foto2 }}" alt=""></p>
	<p>{{ $offer->foto2 }}</p>
	<p><img class="temporary" src="/images/{{ $offer->foto3 }}" alt=""></p>
@endsection