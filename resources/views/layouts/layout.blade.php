<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIO</title>
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>

<body>
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <br>
                <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>

                {{-- <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div> --}}

            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="{{route('personal.index')}}" class="nav-link scrollto active"><i class="bx bi-file-person"></i>
                            <span>Personal</span></a></li>
                    <li><a href="{{route('producto.index')}}" class="nav-link scrollto"><i class="bx bi-box-seam"></i> 
                        <span>Almacen</span></a>
                    </li>
                    <li><a href="{{route('cliente.index')}}" class="nav-link scrollto"><i class="bx bx-user"></i>
                            <span>Clientes</span></a></li>
                    <li><a href="#" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Ventas</span></a></li>
                    <li><a href="#" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Registros</span></a></li>
                    {{-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Contact</span></a></li> --}}
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header>





  <main id="main">
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
</body>

</html>
