<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titulo","BACK CELL") </title>
    <!-- Favicons -->
  <link href="{{asset('img/logo.JPG')}}" rel="icon">
  {{-- <link href="{{url("/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{url("/css/all.min.css")}}" rel="stylesheet"> --}}
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/glightbox/css/glightbox.min.css')}}">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>

<body>
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <header id="header">
        @include('partials.nav')
    </header>

    <main id="main">
        @include('partials.session-status') 
        @yield('content')
    </main>



    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/typed.js/typed.min.js') }}"></script>

    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>

    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
    @yield('js')
</body>

</html>
