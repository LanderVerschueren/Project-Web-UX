<!DOCTYPE html>
<html lang="en">
<head>
    @include( 'includes.head' )
</head>
<body>
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
  
  @include('includes.modal')

  <script type="text/javascript">
    $(document).ready(function() {
      @if( count($errors) > 0 )
      $('#loginModal').modal();
      console.log('error trigger');
      @endif
    });
  </script>
</body>
</html>