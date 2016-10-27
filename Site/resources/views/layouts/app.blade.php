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

    <!-- Scripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>    
    <script src="https://use.fontawesome.com/45e46cc7cf.js"></script>
    <script type="text/javascript" src="/js/ripples.js"></script>
    <script src="/js/ui.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
