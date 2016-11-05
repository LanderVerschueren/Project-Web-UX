<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="container_card">
      <div class="card"></div>
      <div class="card">
        <h1 class="title">Login</h1>
        <form role="form" method="POST" action="{{ url('/login') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="input-container">
            <input id="email" type="email text" name="email" required autofocus/>
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
        <div class="button-container">
          <div class="container_row">
            <div class="button">
            <a href="/register">Registreer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="card"></div>
    <div class="card">
      <h1 class="title">Dashboard</h1>
        <div class="button-container">
          <div class="container_row">
              <div class="button">
                <a href="/dashboard/users">Users</a>
              </div>
              <div class="button">
                <a href="/dashboard/offers">Offers</a>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pictureModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="card"></div>
    <div class="card">
          <img id="modalPicture" class="temporary" src="">
    </div>
  </div>
</div>