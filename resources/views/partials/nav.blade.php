<div class="d-flex flex-column">

    <div class="profile">
        <br>
        <h1 class="text-light"><a href="index.html">{{ auth()->user()->nombre }}</a></h1>

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
            <li class="{{ setActive('personal.index') }}"><a href="{{ route('personal.index') }}"
                    class="nav-link scrollto "><i class="bx bi-file-person"></i>
                    <span>Personal</span></a></li>
            <li class="{{ setActive('productos.index') }}"><a href="{{ route('productos.index') }}"
                    class="nav-link scrollto"><i class="bx bi-box-seam"></i>
                    <span>Almacen de Productos</span></a>
            </li>
            <li class="{{ setActive('clientes.index') }}"><a href="{{ route('clientes.index') }}"
                    class="nav-link scrollto"><i class="bx bx-usermore"></i>
                    <span>Clientes</span></a></li>

            <li class="{{ setActive('bancos.index') }}"><a href="{{ route('bancos.index') }}"
                    class="nav-link scrollto"><i class="bi bi-bank"></i>
                    <span>Bancos</span></a></li>

            <li class="{{ setActive('vender.index') }}"><a href="{{ route('vender.index') }}"
                    class="nav-link scrollto"><i class="bi bi-cart-plus"></i>
                    <span>Vender</span></a></li>
            <li class="{{ setActive('creditos.index') }}"><a href="{{ route('creditos.index') }}"
                    class="nav-link scrollto"><i class="bi bi-cash-stack"></i>
                    <span>Creditos</span></a></li>
            <li class="{{ setActive('ventas.index') }}"><a href="{{ route('ventas.index') }}"
                    class="nav-link scrollto"><i class="bx bx-book-content"></i>
                    <span>Ventas</span></a></li>
            <li {{-- class="{{setActive('personal.index')}}" --}}><a href="#" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                    <span>Registros</span></a></li>
            {{-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                    <span>Contact</span></a></li> --}}
            <li class="{{ setActive('users.index') }}"><a href="{{ route('users.index') }}"
                    class="nav-link scrollto"><i class='bx bxs-user-detail'></i>
                    <span>Asignar rol</span></a>
            </li>
            <li class="{{ setActive('roles.index/*') }}"><a href="{{ route('roles.index') }}"
                    class="nav-link scrollto"><i class='bx bxs-key'></i>
                    <span>Roles</span></a>
            </li>
            <li>
                <a href="" class="nav-link scrollto"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class='bx bx-log-out-circle'></i>Cerrar Session</a>
            </li>
        </ul>
    </nav><!-- .nav-menu -->
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
