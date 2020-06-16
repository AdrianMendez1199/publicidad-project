<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>

    <link rel="stylesheet" href={{ asset("css/estilos.css") }}>
    <link rel="stylesheet" href={{ asset( "css/registro.css") }}>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href={{ asset("css/slick.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("css/slick-theme.css") }}>
    
</head>
<body class="bg-dark">
      @yield('content')
</body>
     <script src={{ asset("js/jquery-3.4.1.slim.min.js") }}></script>
     <script src={{ asset("js/bootstrap.min.js") }}></script>
     <script src="https://code.jquery.com/jquery-1.11.3.min.js" ></script>
     <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
        <!-- Registro -->
    <script src="js/registro.js"></script>
     @yield('scripts')

</html>

