<!DOCTYPE html>
<html lang="en">
<head>
    @include( 'includes.head' )
</head>
<body>

    <div class="container_nav">
        @include('includes.nav2')
    </div>
    <div class="container_content">
        <div id="app">
            @yield('content')
        </div>
    </div>
    
    <footer>
        @include( 'includes.footer' )
    </footer>

</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
