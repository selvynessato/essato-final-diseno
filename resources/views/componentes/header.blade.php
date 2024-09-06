<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('/images/navbar/logo-essato-blanco.svg')}}" alt="Logo" width="80" height="80" class="d-inline-block align-text-top"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
<!--            <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
-->                  
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/empresa') }}">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ods') }}">ODS</a>
                </li>
<!--            <li class="nav-item">
                    <a class="nav-link" href="#">Empleos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pasantías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
-->                               
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('/servicio/marketing')}}">Marketing</a></li>
                        <li><a class="dropdown-item" href="{{url('/servicio/redes')}}">Redes</a></li>
                        <li><a class="dropdown-item" href="{{url('/servicio/desarrollo')}}">Desarrollo</a></li>
                        <li><a class="dropdown-item" href="{{url('/servicio/branding')}}">Branding</a></li>
                        <li><a class="dropdown-item" href="{{url('/servicio/asesoria-financiera')}}">Asesoria Financiera</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="nav-link">Panel de administración</a>
            @else
                <a href="{{ route('login') }}" class="nav-link">
                    <img src="{{asset('/images/navbar/cliente.png')}}" alt="logo cliente" width="32" height="32">
                </a>
                @if (Route::has('register'))
                <a href="#" class="nav-link">
                    <img src="{{asset('/images/navbar/escuela.png')}}" alt="logo cliente" width="32" height="32">
                </a>
                @endif
            @endauth
            @endif
        </div>
    </div>
</nav>

