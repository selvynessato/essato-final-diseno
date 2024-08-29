<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('/images/navbar/logo-essato-blanco.svg')}}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Panel de administracion</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            <img src="{{asset('/images/navbar/cliente.png')}}" alt="logo cliente" width="32" height="32">
                        </a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img src="{{asset('/images/navbar/escuela.png')}}" alt="logo cliente" width="32" height="32">
                        </a>
                    </li>           
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('/images/navbar/menu.svg')}}" alt="logo cliente" width="32" height="32">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Nosotros</a></li>
                            <li><a class="dropdown-item" href="#">Portafolio</a></li>
                            <li><a class="dropdown-item" href="{{ url('/empresa') }}">Clientes</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Servicios</a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{url('/servicio/marketing')}}">Marketing</a></li>
                                    <li><a class="dropdown-item" href="{{url('/servicio/redes')}}">Redes</a></li>
                                    <li><a class="dropdown-item" href="{{url('/servicio/desarrollo')}}">Desarrollo</a></li>
                                    <li><a class="dropdown-item" href="{{url('/servicio/branding')}}">Branding</a></li>
                                    <li><a class="dropdown-item" href="{{url('/servicio/asesoria-financiera')}}">Asesoria Financiera</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/ods') }}">ODS</a></li>
                            <li><a class="dropdown-item" href="#">Empleos</a></li>
                            <li><a class="dropdown-item" href="#">Pasantías</a></li>
                            <li><a class="dropdown-item" href="#">Asociados</a></li>
                            <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                        </ul>
                    </li>
                    @endif
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
