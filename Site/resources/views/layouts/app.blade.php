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
        <div class="search">
            <form action="">
                <input type="text" placeholder="Zoeken naar...">
                <button class="" type="submit">Search</button>
            </form>
        </div>
        <div id="app">
            @yield('content')
        </div>
    </div>

</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
