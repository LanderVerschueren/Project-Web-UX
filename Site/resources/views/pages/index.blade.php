@extends('layouts.app')

@section('content')
<div class="container-left">
	<a href="{{ url('/offer') }}" class="hvr-float">
		<h1>Hebt u teveel?</h1>
	</a>
</div>

<div class="container-right">
	<a href="{{ url('/buy') }}" class="hvr-sink">
		<h1>Op zoek naar verse producten?</h1>
	</a>
</div>
@endsection