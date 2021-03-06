<html>


    @section('head')
        <head>
            <title>@yield('title')</title>
            <meta name="description" content="@yield('description')">
            <meta name="keywords" content="@yield('keywords')">
            <meta name="author" content="Aziz Mohammed">
            <link rel="icon" type="image/x-icon" href="@yield('icon')">
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
            <link rel="stylesheet" href="{{asset('assets')}}/assets/bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="{{asset('assets')}}/assets/css/main.css" />
            <noscript><link rel="stylesheet" href="{{asset('assets')}}/assets/css/noscript.css" /></noscript>
        </head>
    @show

<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

@include('home.header')
@include('home.navbar')
@yield('content')
@include('home.footer')
@section('scripts')
<!-- Scripts -->
<script src="{{asset('assets')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/assets/js/jquery.scrolly.min.js"></script>
<script src="{{asset('assets')}}/assets/js/jquery.scrollex.min.js"></script>
<script src="{{asset('assets')}}/assets/js/main.js"></script>
@show

</body>
</html>
