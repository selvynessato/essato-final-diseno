<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Blogs</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('/images/navbar/logo-essato-blanco.svg')}}" alt="Logo" width="32" height="32" class="d-inline-block align-text-top"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">Inicio</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                <img src="{{asset('/images/navbar/cliente.png')}}" alt="logo cliente" width="32" height="32">
                            </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <!--a href="{{ route('register') }}" class="nav-link">Register</a-->
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
                                <li><a class="dropdown-item" href="#">Clientes</a></li>
                                <li><a class="dropdown-item" href="#">Servicios</a></li>
                                <li><a class="dropdown-item" href="#">ODS</a></li>
                                <li><a class="dropdown-item" href="#">Empleos</a></li>
                                <li><a class="dropdown-item" href="#">Pasantías</a></li>
                                <li><a class="dropdown-item" href="#">Asociados</a></li>
                                <li><a class="dropdown-item" href="#">Blog</a></li>
                            </ul>
                        </li>
                        @endif
                    @endauth
                    @endif
                </ul>
                </div>
            </div>
        </nav>
    </header>

<main>
    <div class="primera-parte">
        <div class="container d-flex flex-column justify-content-end h-100">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <div class="texto-inicio">     
                        <h1 class="primera-essato-titulo">Explora nuestra biblioteca</h1>
                        <h1 class="primera-essato-titulo">de Artículos Gratuitos</h1>
                    </div>   
                    <div class="texto-inicio">     
                        <h1 class="primera-essato-subtitulo">
                            Aprovecha al máximo tu tiempo con nuestras herramientas gratuitas
                        </h1>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <div class="segunda-parte">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <div class="segunda-texto-inicio">     
                        <h1 class="segunda-essato-titulo">Categoria</h1>
                    </div>   
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col text-center">
                    <button type="button" class="btn btn-light custom-btn">Marketing</button>
                    <button type="button" class="btn btn-light custom-btn">Social Medio</button>
                    <button type="button" class="btn btn-light custom-btn">Desarrollo Web</button>
                    <button type="button" class="btn btn-light custom-btn">Branding</button>
                    <button type="button" class="btn btn-light custom-btn">Asesoria Financiera</button>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <div class="septima-parte">
        <div class="container-fluid">             
            <div class="row justify-content-center">
                @foreach ($blogs as $blog)
                <div class="col-md-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <img src="{{ asset($blog->img_blog) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $blog->nombre_blog }}
                            </h5>
                            <p class="card-text text-justify truncated">
                                {{ $blog->contenido_blog }}
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="#" class="btn btn-info btn-sm">Leer Mas</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>       
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>


