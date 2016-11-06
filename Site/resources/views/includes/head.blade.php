<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Project Web-UX') }} | @yield('title')</title>

<!-- Styles -->
<link href="/css/normalize.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Roboto" rel="stylesheet">
<link href="/css/ripples.css" rel="stylesheet">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<!--<![endif]-->
<link href="/css/app.css" rel="stylesheet">

<!-- Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>    
<script src="https://use.fontawesome.com/45e46cc7cf.js"></script>
<script type="text/javascript" src="/js/ripples.js"></script>
<script>
 	window.Laravel = <?php echo json_encode([
 		'csrfToken' => csrf_token(),
	]); ?>
</script>
<script src="/js/app.js"></script>