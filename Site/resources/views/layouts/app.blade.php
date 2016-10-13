<!DOCTYPE html>
<html lang="en">
<head>
    @include( 'includes.head' )
</head>
<body>

    @include('includes.nav2')
    <div id="app">
            
            @yield('content')
            
    </div>
    
    <footer>
        @include( 'includes.footer' )
    </footer>

</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
