<div class="navigation">
	<div class="logo">
		<a href="{{ url('/') }}">
			<img src="/img/garden.png" alt="">
		</a>
	</div>
	<div class="user-info">
		@if (Auth::guest())
		<li><a href="{{ url('/login') }}">Inloggen</a></li>
		<li class=""><a href="{{ url('/register') }}">Registreren</a></li>
		@else	
		<li>
			<a href="#">
				Hallo {{ ucfirst( Auth::user()->voornaam ) }}!
			</a>
		</li>
		<li>
			<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				Logout
			</a>

			<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
		@endif
	</div>

	<div class="rest-info">
		
	</div>
</div>