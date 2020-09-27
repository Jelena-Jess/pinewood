<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Pinewood')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar-top')

        @if(\Request::is("/"))
            @include('inc.header')
        @else 
            @include('inc.header_pages')
        @endif

        <main>
            @yield('content')
        </main>

        @include('inc.footer')
    </div>

     <!-- Scripts -->
     <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
     <script>
     CKEDITOR.replace( 'article-ckeditor' );
     </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="{{ asset('js/main.js') }}" defer></script>
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('js/slick.min.js') }}" defer></script>
     
</body>
</html>
