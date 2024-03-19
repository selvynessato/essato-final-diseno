<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Essato</title>

    <!-- Fonts -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

</head>
<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="{{asset('/images/navbar/logo-essato-blanco.png')}}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top"> 
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
            <div class="texto-inicio">     
                <h1>ESSATO</h1>
                <h2 id="subtitulo">Somos más que una agencia de marketing,</h2>
                <h2>Somos una agencia de progreso y avance para tu negocio.</h2>
            </div>      

            <div class="primera-video">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/XBaVaoGIEbc?si=hmi2R4HLKE1jAw0i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="segunda-parte">
            <div class="container-fluid">
                <div class="row align-items-start">
                    <div class="col-md-6 col-12">
                        <p class="essato-segunda-parte">
                            Exploramos nuevas tecnologías para ayudarte a avanzar, ya sea porque necesites aumentar tu facturación, mejorar el posicionamiento de tu marca o definir los mejores procesos para llegar a tus objetivos.
                        </p>	
                    </div>
                    <div class="col-md-6 col-12 position-relative">
                        <img src="{{asset('/images/mainpaginauno/chica.jpeg')}}" alt="logo chica" class="img-fluid">
                        <button type="button" class="btn btn-outline-light btn-lg fw-bold border-3 position-absolute top-50 start-50 translate-middle">
                            Clientes
                        </button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div id="leyenda-bajo-img">
                            <p>
                                Lleva tu negocio al éxito ya que nuestra meta será simplificar el trayecto, haciéndolo práctico y eficiente.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="tercera-parte">
            <div class="owl-carousel owl-theme">
                <div class="item">                 
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Gestion de redes sociales
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer</p>
                            <p class="card-text">Adipiscing elit, sed diam nonummy nibh</p>
                            <p class="card-text">euismod tincidunt ut laoreet dolore magna</p>
                            <p class="card-text">aliquam erat volutpat. ut wisi enim ad</p>
                            <p class="card-text">minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div>
                </div>
                <div class="item">                 
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Marketing estrategico
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer</p>
                            <p class="card-text">Adipiscing elit, sed diam nonummy nibh</p>
                            <p class="card-text">euismod tincidunt ut laoreet dolore magna</p>
                            <p class="card-text">aliquam erat volutpat. ut wisi enim ad</p>
                            <p class="card-text">minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div>
                </div>
                <div class="item">                 
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Desarrollo web
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer</p>
                            <p class="card-text">Adipiscing elit, sed diam nonummy nibh</p>
                            <p class="card-text">euismod tincidunt ut laoreet dolore magna</p>
                            <p class="card-text">aliquam erat volutpat. ut wisi enim ad</p>
                            <p class="card-text">minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div>
                </div>
                <div class="item">                 
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Branding
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer</p>
                            <p class="card-text">Adipiscing elit, sed diam nonummy nibh</p>
                            <p class="card-text">euismod tincidunt ut laoreet dolore magna</p>
                            <p class="card-text">aliquam erat volutpat. ut wisi enim ad</p>
                            <p class="card-text">minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div>
                </div>
                <div class="item">                 
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Asesoría financiera
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer</p>
                            <p class="card-text">Adipiscing elit, sed diam nonummy nibh</p>
                            <p class="card-text">euismod tincidunt ut laoreet dolore magna</p>
                            <p class="card-text">aliquam erat volutpat. ut wisi enim ad</p>
                            <p class="card-text">minim veniam, quis nostrud exerci tation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cuarta-parte" class="cuarta-parte">
            <div class="container-fluid">
                <div class="row align-items-start">
                    <div id="cuarta-parte-gris" class="col-md-6 col-12 position-relative">
                        <h1 class="titulo">
                            Trabajamos desde la estrategia hasta la ejecución
                        </h1>
                        <p class="essato-segunda-parte">
                            Aplicamos nuestro enfoque "Piensa más allá" para ayudar a nuestros clientes a descubrir oportunidades concretas y lanzar productos y servicios líderes en el mercado.                              
                        </p>	
                    </div>
                    <div class="col-md-6 col-12">
                        <iframe width="100%" height="700" src="https://www.youtube.com/embed/XBaVaoGIEbc?si=hmi2R4HLKE1jAw0i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="quinta-parte">
            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                        <div data-aos="fade-right">
                            <img src="{{asset('/images/youtube.png')}}" class="img-fluid" width="200" height="200" alt="youtube">
                            <h3>
                                Gestion de redes sociales
                            </h3>
                        </div>
                        <div class="col align-self-center">

                        </div>
                        <div class="col align-self-end">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col align-self-start">

                        </div>
                        
                        <div class="col align-self-center">
                            <div data-aos="fade-right">
                                <img src="{{asset('/images/facebook.png')}}" class="img-fluid" width="200" height="200" alt="youtube">
                                <h3>
                                    Marketing estrategico
                                </h3>
                            </div>
                        </div>
                        <div class="col align-self-end">
                            
                        </div>
                </div>

                <div class="row">
                        <div class="col align-self-start">

                        </div>
                        
                        <div class="col align-self-center">
                            
                        </div>
                        <div class="col align-self-end">
                            <div data-aos="fade-down">
                                <img src="{{asset('/images/tik-tok.png')}}" class="img-fluid" width="200" height="200" alt="youtube">
                                <h3>
                                    Desarrollo web
                                </h3>
                            </div>
                        </div>
                </div>

                <div class="row">
                        <div class="col align-self-start">

                        </div>
                        
                        <div class="col align-self-center">
                            <div data-aos="fade-left">
                                <img src="{{asset('/images/facebook.png')}}" class="img-fluid" width="200" height="200" alt="youtube">
                                <h3>
                                    Branding
                                </h3>
                            </div>
                        </div>
                        <div class="col align-self-end">
                            
                        </div>
                </div>
                
                <div class="row">
                    <div class="col align-self-start">
                        <div data-aos="fade-left">
                            <img src="{{asset('/images/youtube.png')}}" class="img-fluid" width="200" height="200" alt="youtube">
                            <h3>
                                Asesoría financiera
                            </h3>
                        </div>
                    </div>
                    <div class="col align-self-center">

                    </div>
                    <div class="col align-self-end text-center">
                        <div data-aos="zoom-out-left">
                            <button type="button" class="btn btn-outline-light btn-lg fw-bold border-3">
                                Portafolio
                            </button>
                            <hr>
                        </div>                           
                    </div>
                </div>
            </div>
        </div>
        <div class="sexta-parte">
            <div class="container-fluid">
                    <div class="row align-items-start">
                        <div id="sexta-parte-gris" class="col-md-4 col-12 position-relative">
                            <iframe width="100%" height="700" src="https://www.youtube.com/embed/XBaVaoGIEbc?si=hmi2R4HLKE1jAw0i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-8 col-12">
                            
                        </div>
                    </div>
            </div>
        </div>

        <div class="septima-parte">
            <div class="card text-center">
                <div class="card-header">
                    Encabezado
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cuerpo</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    <h5 class="card-title">Pie</h5>
                </div>
            </div>
        </div>
        
    </main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="social-icons">
                    <div class="social-icon">
                        <a href="https://www.facebook.com/essatomarketing" target="_blank">
                            <img src="{{asset('/images/facebook.png')}}" class="img-fluid" alt="facebook">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.instagram.com/essatomarketing/" target="_blank">
                            <img src="{{asset('/images/instagram.png')}}" class="img-fluid" alt="instagram">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.tiktok.com/@essato_marketing" target="_blank">
                            <img src="{{asset('/images/tik-tok.png')}}" class="img-fluid" alt="tik-tok">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.youtube.com/@essato_marketing" target="_blank">
                            <img src="{{asset('/images/youtube.png')}}" class="img-fluid" alt="youtube">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Espacio entre las columnas -->
            <div class="col-md-2 d-none d-md-block" style="border:none;"></div> 
            <div class="col-md-6">
                <p class="text-center text-md-end">&copy; Copyringht Essato Marketing y Publicidad - 2024</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true, 
                autoplayTimeout:3000, 
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        });
    </script>

<script>
    AOS.init();
</script>
</body>
</html>
