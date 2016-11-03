@extends('layouts.app')

@section('title', 'Buy detail')

@section('content')
	<div class="container_column buy_page">
		<div class="card"></div>
		<div class="card offer">
			<div class="col-md-12">
				<h1>{{ $offer->naam }}</h1>
				<p>Aantal: {{ $offer->aantal }}</p>
				<p>Prijs per: {{ $offer->prijs }} &euro;</p>

				<p><a href="/user/{{ $boughtFromUser->id }}">{{ $boughtFromUser->voornaam . " " . $boughtFromUser->achternaam}}</a></p>
			</div>

			<div clss="col-md-12">
				<div class="col-md-4">
					<img class="temporary" src="/images/{{ $offer->foto }}">
				</div>
				<div class="col-md-4">
					@if($offer->foto2 != null)
						<img class="temporary" src="/images/{{ $offer->foto2 }}">
					@else
						<img class="temporary" src="/img/noImage.png">
					@endif
				</div>
				<div class="col-md-4">
					@if($offer->foto3 != null)
						<img class="temporary" src="/images/{{ $offer->foto3 }}">
					@else
						<img class="temporary" src="/img/noImage.png">
					@endif
				</div>
			</div>

			<form action="/buyOffer/{{$offer->id}}" method="post" enctype="multipart/form-data">
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
		</div>
	</div>
@endsection