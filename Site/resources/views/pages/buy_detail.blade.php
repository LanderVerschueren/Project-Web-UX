@extends('layouts.app')

@section('title', 'Buy detail')

@section('content')
<form action="/buyOffer/{{$offer->id}}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="container_row">
		<div class="col-sm-12">
			<div class="container_card">
				<div class="card"></div>
				<div class="card offer">
					<h1 class="title">{{ ucfirst($offer->naam) }}</h1>
					<div class="info_offer buy_detail container_row">
						<div class="left">
							<div class="container_column">
								<img id='pictureModal1' class="temporary" src="/images/{{ $offer->foto }}">
								<div class="container_row">
									<div class="col-md-6">
										@if($offer->foto2 != null)
										<img id='pictureModal1' class="temporary" src="/images/{{ $offer->foto2 }}">
										@else
										<img class="temporary" src="/img/noImage.png">
										@endif
									</div>
									<div class="col-md-6">
										@if($offer->foto3 != null)
										<img id='pictureModal1' class="temporary" src="/images/{{ $offer->foto3 }}">
										@else
										<img class="temporary" src="/img/noImage.png">
										@endif
									</div>
								</div>
							</div>
						</div>
						<div class="right">
							<span class="borders">Prijs: &euro;{{ $offer->prijs }}</span>
							<span class="borders">Aantal: {{ $offer->aantal }}</span>
							<span class="borders"><a href="/user/{{ $boughtFromUser->id }}">{{ ucfirst($boughtFromUser->voornaam) . " " . ucfirst($boughtFromUser->achternaam)}}</a></span>
							<div class="borders">
								@if($boughtFromUser->id != $buyingUser->id)					
								@if($error == '')
									<span for="aantal" class="control-label">Aantal</span>
								@else
									<span for="aantal" class="control-label">Aantal</span>
									<span for="aantal" class="control-label">{{$error}}</span>
								@endif
								
								<input id="aantal" type="number" class="form-control" name="aantal" value="{{ $offer->aantal }}" max="{{ $offer->aantal }}" min="0" required>
								@endif
							</div>
						</div>
					</div>
					<div class="button-container">
						<button type="submit">
							<span>Koop!</span>
						</button>
					</div>
				</div> 
			</div> 
		</div>  
	</div> 
</form>
@endsection