<!-- Menu toggle -->
<a href="#menu" id="menuLink" class="menu-link">
    <!-- Hamburger icon -->
    <span></span>
</a>

<div id="menu">
    <div class="pure-menu">
        <a class="pure-menu-heading" href="/">
            <img src="/img/logo.png" alt="" class="pure-img">
        </a>

        <ul class="pure-menu-list">
            @if ( Auth::guest() )
            <li class="pure-menu-item"><a href="#" id="login" class="pure-menu-link">Inloggen</a></li>
            @else
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Hallo {{ ucfirst( Auth::user()->voornaam ) }}</a></li>
            <li class="pure-menu-item"><a href="/messages" class="pure-menu-link">Messages</a></li>
            @if(Auth::user()->isadmin())
            <li class="pure-menu-item"><a href="#" class="pure-menu-link" id="dashboard">Dashboard</a></li>
            @endif

            <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                <a href="{{ url('/logout') }}" class="pure-menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				    Logout
			    </a>

			    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
				    {{ csrf_field() }}
			    </form>
            </li>
            @endif
        </ul>
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="\offer" class="pure-menu-link">Aanbieden</a></li>
            <li class="pure-menu-item"><a href="\buy" class="pure-menu-link">Kopen</a></li>
        </ul>
    </div>
</div>