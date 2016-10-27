<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="container_card">
    <div class="card"></div>
    <div class="card">
      <h1 class="title">Login</h1>
      <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="input-container">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus/>
          <label for="email">E-mail Adres</label>
          <div class="bar"></div>
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-container">
          <input id="password" type="password" name="password" required/>
          <label for="password">Paswoord</label>
          <div class="bar"></div>
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
        <div class="button-container">
          <button type="submit"><span>Login</span></button>
        </div>
      </form>
    </div>
    <div class="card alt">
      <div class="toggle"></div>
      <h1 class="title">Registreren
        <div class="close"></div>
      </h1>
      <form>
        <div class="input-container">
          <input id="voornaam" type="text" name="voornaam" value="{{ old('voornaam') }}" required autofocus/>
          <label for="voornaam">Voornaam</label>
          <div class="bar"></div>
          @if ($errors->has('voornaam'))
            <span class="help-block">
              <strong>{{ $errors->first('voornaam') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-container">
          <input id="achternaam" type="text" name="achternaam" value="{{ old('achternaam') }}" required autofocus/>
          <label for="achternaam">Achternaam</label>
          <div class="bar"></div>
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('achternaam') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-container">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required/>
          <label for="email">E-mail Adres</label>
          <div class="bar"></div>
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-container">
          <input id="adres" type="text" name="adres" value="{{ old('adres') }}" required autofocus>
          <label for="adres">Straat + Nummer</label>
          <div class="bar"></div>
          @if ($errors->has('adres'))
            <span class="help-block">
              <strong>{{ $errors->first('adres') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-container">
          <input id="woonplaats" type="text" name="woonplaats" value="{{ old('woonplaats') }}" required autofocus>
          <label for="woonplaats">Woonplaats</label>
          <div class="bar"></div>
          @if ($errors->has('woonplaats'))
            <span class="help-block">
              <strong>{{ $errors->first('woonplaats') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-container">
          <input id="postcode" type="text" name="postcode" value="{{ old('postcode') }}" required autofocus>
          <label for="postcode">Postcode</label>
          <div class="bar"></div>
          @if ($errors->has('postcode'))
            <span class="help-block">
              <strong>{{ $errors->first('postcode') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-container">
          <input id="password" type="password" name="password" required>
          <label for="password">Paswoord</label>
          <div class="bar"></div>
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-container">
          <input id="password-confirm" type="password" name="password_confirmation" required>
          <label for="password-confirm">Bevestig Paswoord</label>
          <div class="bar"></div>
          @if ($errors->has('password_confirmation'))
            <span class="help-block">
              <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
          @endif
        </div>
        <div class="button-container">
          <button><span>Next</span></button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Dashboard</h4>
      </div>

      <div class="modal-body">
       <a class="btn btn-primary" href="/dashboard/users">Users</a>
       <a class="btn btn-primary" href="/dashboard/offers">Offers</a>
     </div>
   </div>
 </div>
</div>

<div class="modal fade" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Dashboard</h4>
      </div>

      <div class="modal-body">
       <a class="btn btn-primary" href="/dashboard/users">Users</a>
       <a class="btn btn-primary" href="/dashboard/offers">Offers</a>
     </div>
   </div>
 </div>
</div>