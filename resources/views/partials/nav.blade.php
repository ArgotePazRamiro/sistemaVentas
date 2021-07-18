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
            <li class="{{setActive('personal.index')}}"><a href="{{route('personal.index')}}" class="nav-link scrollto "><i class="bx bi-file-person"></i>
                    <span>Personal</span></a></li>
            <li class="{{setActive('producto.index')}}"><a href="{{route('producto.index')}}" class="nav-link scrollto"><i class="bx bi-box-seam"></i> 
                <span>Almacen</span></a>
            </li>
            <li class="{{setActive('cliente.index')}}"><a href="{{route('cliente.index')}}" class="nav-link scrollto"><i class="bx bx-user"></i>
                    <span>Clientes</span></a></li>
            <li class="{{setActive('ventas.index')}}"><a href="{{route('ventas.index')}}" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                    <span>Ventas</span></a></li>
            <li {{-- class="{{setActive('personal.index')}}" --}}><a href="#" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                    <span>Registros</span></a></li>
            {{-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                    <span>Contact</span></a></li> --}}
        </ul>
    </nav><!-- .nav-menu -->
</div>