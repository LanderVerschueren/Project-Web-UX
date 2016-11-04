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
								<img class="pictureModal1 temporary" src="/images/{{ $offer->foto }}">
								<div class="container_row">
									<div class="col-md-6">
										@if($offer->foto2 != null)
										<img class="pictureModal1 temporary" src="/images/{{ $offer->foto2 }}">
										@else
										<img class="temporary" src="/img/noImage.png">
										@endif
									</div>
									<div class="col-md-6">
										@if($offer->foto3 != null)
										<img class="pictureModal1 temporary" src="/images/{{ $offer->foto3 }}">
										@else
										<img class="temporary" src="/img/noImage.png">
										@endif
									</div>
								</div>
							</div>
						</div>
						<div class="right">
							<span>Prijs: &euro;{{ $offer->prijs }}</span>
							<span>Aantal: {{ $offer->aantal }}</span>
							<span><a href="/user/{{ $boughtFromUser->id }}">{{ ucfirst($boughtFromUser->voornaam) . " " . ucfirst($boughtFromUser->achternaam)}}</a></span>
							<span>
								@if($buyingUser != 'guest')
									@if($boughtFromUser->id != $buyingUser->id)
										@if($error == '')
											<label for="aantal" class="col-md-4 control-label">Aantal</label>
										@else
											<label for="aantal" class="col-md-4 control-label">Aantal</label>
											<label for="aantal" class="col-md-4 control-label">{{$error}}</label>
										@endif

										<input id="aantal" type="text" class="form-control" name="aantal" required autofocus>

										<div class="button-container">
											<button type="submit">
												<span>Koop!</span>
											</button>
										</div>
									@endif
								@endif
							</span>
						</div>
					</div>
				</div> 
			</div> 
		</div>  
	</div> 
</form>
@endsection