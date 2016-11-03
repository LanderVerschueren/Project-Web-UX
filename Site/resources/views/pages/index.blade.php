@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="container_row homepage">
	<div class="container-left">
		<a href="/offer">
			<h1>Aanbieden</h1>
		</a>
	</div>

	<div class="container-right">
		<a href="/buy">
			<h1>Kopen</h1>
		</a>
	</div>
</div>
@endsection