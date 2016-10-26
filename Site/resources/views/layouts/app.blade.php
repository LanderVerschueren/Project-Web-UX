<!DOCTYPE html>
<html lang="en">
<head>
    @include( 'includes.head' )
</head>
<body>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="myModalLabel">Registreren</h4>
              </div>
              
              <div class="modal-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-md-4 control-label">E-Mail Adres</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Paswoord</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-md-8 col-md-offset-4">
                               <button type="submit" class="btn btn-primary">
                                   Inloggen
                               </button>

                               <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                  Paswoord vergeten?
                               </a>
                           </div>
                       </div>
                   </form>       
              </div>
          </div>
      </div>
  </div>

  <div id="layout">
    
    @include('includes.nav2')

    <div id="main">
      <div class="header">
        <h1>@yield('title')</h1>
        <form action="/search" method="post">
            {{csrf_field()}}
          <input type="text" name="searchTerm" placeholder="Zoeken naar...">
          <button class="" type="submit">Search</button>
        </form>
      </div>

      <div class="content">
        <div id="app">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

    <!-- Scripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>    
    <script src="https://use.fontawesome.com/45e46cc7cf.js"></script>
    <script type="text/javascript" src="/js/material.js"></script>
    <script type="text/javascript" src="/js/ripples.js"></script>
    <script src="/js/ui.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
