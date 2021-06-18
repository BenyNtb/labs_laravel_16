<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labs</title>
    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>

    {{-- @include('partials.preloader') --}}
    @include('partials.nav')
    @include('partials.footer')
    @yield('content')


    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYpcUjjuBBcq_S4chNnFhx-hbKcl7sfRY&callback=initMap">
    </script>

    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
