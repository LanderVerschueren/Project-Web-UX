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
      @yield('pageTitle')
      <form action="\search" method="post">
          {{ csrf_field() }}
        <input type="text" name="searchTerm" id="searchterm" placeholder="Zoeken naar...">
        <button type="submit">Search</button>
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
    <script src="/js/ui.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
