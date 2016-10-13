<!DOCTYPE html>
<html lang="en">
<head>
    @include( 'includes.head' )
</head>
<body>

    <div class="container_nav">
        @include('includes.nav3')
    </div>
    <div class="container_content">
        <div id="app">
            @yield('content')
        </div>
    </div>

</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
