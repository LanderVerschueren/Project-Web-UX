<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Project Web-UX') }}</title>

<!-- Styles -->
<link href="/css/normalize.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/hover.css">
<link href="/css/bootstrap-material-design.css" rel="stylesheet">
<link href="/css/ripples.css" rel="stylesheet">   
<link href="/css/app.css" rel="stylesheet">

<!-- Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script type="text/javascript" src="/js/material.js"></script>
<script type="text/javascript" src="/js/ripples.js"></script>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script type="text/javascript" src="/js/app.js"></script>