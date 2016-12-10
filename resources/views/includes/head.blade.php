
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gemicid:') }}</title>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ url('public/images/favicon.ico') }}"/>
    <!-- Font Awesome -->
    <link href="{{ URL::asset('public/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('public/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/slick.css') }}"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/jquery.fancybox.css') }}" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="{{ URL::asset('public/text/css') }}" href="assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="{{ URL::asset('public/css/theme-color/default.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <!--<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Main Style -->
    <link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <!-- included fonts (Open Sans for body font, Raleway for title, Pacifico for error pages)-->
     <link href="{{ URL::asset('public/fonts/fonts.css') }}" rel='stylesheet' type='text/css'>


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
      #foo {
        position: fixed;
        bottom: 0;
        right: 0;
      }
    </style>

    <meta name=viewport content='width=800'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--tel css-->
    <link rel="stylesheet" href="{{ url('public/tel/css/intlTelInput.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/custom.css') }}">


