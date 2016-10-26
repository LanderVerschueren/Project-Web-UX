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
      <form action="">
        <input type="text" placeholder="Zoeken naar...">
        <button class="" type="submit">Search</button>
      </form>
    </div>

    <div class="content">
        <div id="app">
          @yield('content')
        </div>

        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @yield('test')
</div>
  </div>
</div>

    <!-- Scripts -->
    <script src="/js/ui.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://use.fontawesome.com/45e46cc7cf.js"></script>
</body>
</html>
