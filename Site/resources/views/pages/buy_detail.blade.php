@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
	<p>{{ $offer->naam }}</p>
	<p>{{ $offer->aantal }}</p>
	<p>{{ $offer->prijs }} &euro;</p>

	<p><a href="/user/{{ $user->id }}">{{ $user->voornaam . " " . $user->achternaam}}</a></p>

	<img class="temporary" src="/images/{{ $offer->foto }}">

	@if($offer->foto2 != null)
		<img class="temporary" src="/images/{{ $offer->foto2 }}">
	@else
		<img class="temporary" src="/img/noImage.png">
	@endif

	@if($offer->foto3 != null)
		<img class="temporary" src="/images/{{ $offer->foto3 }}">
	@else
		<img class="temporary" src="/img/noImage.png">
	@endif
@endsection