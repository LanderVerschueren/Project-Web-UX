@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="container-left">
	<a href="offer">
		<h1>Aanbieden</h1>
	</a>
</div>

<div class="container-right">
	<a href="buy">
		<h1>Kopen</h1>
	</a>
</div>
@endsection

<!--
<div class="container-left">
	<a href="{{ url('/offer') }}">
		<h1>Hebt u teveel?</h1>
	</a>
</div>

<div class="container-right">
	<a href="{{ url('/buy') }}">
		<h1>Op zoek naar verse producten?</h1>
	</a>
</div>
-->