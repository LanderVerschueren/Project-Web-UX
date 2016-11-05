@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="container_row homepage">
	<div class="container-left">
		<a href="/offer">
			<h2>Aanbieden</h2>
		</a>
	</div>

	<div class="container-right">
		<a href="/buy">
			<h2>Kopen</h2>
		</a>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		@if( $modalTriggered === true )
		$('#loginModal').modal();
		console.log('login trigger');
		@endif
	});
</script>
@endsection