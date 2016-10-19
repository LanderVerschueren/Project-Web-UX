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
      <h1>Page Title</h1>
      <form action="">
        <input type="text" placeholder="Zoeken naar...">
        <button class="" type="submit">Search</button>
      </form>
    </div>

    <div class="content">
        <div style="margin: 2px;">Test</div>
    </div>
  </div>
</div>

    <!-- Scripts -->
    <script src="/js/ui.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
