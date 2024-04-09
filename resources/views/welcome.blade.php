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
    </header>

    <main>
        <div class="primera-parte">
            <div class="container">
                <div class="row justify-content-md-left">
                    <div class="col-md-auto">
                        <div class="texto-inicio">     
                            <h1 id="essato-titulo">ESSATO</h1>
                        </div>   
                    </div>
                </div>
                <div class="row justify-content-md-left">
                    <div class="col">
                        <h2 class="subtitulo">Somos más que una agencia de marketing,</h2>
                        <h2 class="subtitulo">Somos una agencia de progreso y avance para tu negocio.</h2>
                    </div>
                        <div class="col-md-auto">
                        </div>
                    <div class="col col-lg-2">
                        <a href="#servicios" class="btn btn-outline-light btn-lg fw-bold border-3">
                            Servicios
                        </a>
                    </div>
                </div>
            </div>
            <div class="primera-video">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/XBaVaoGIEbc?si=hmi2R4HLKE1jAw0i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="segunda-parte">
            <div class="container-fluid">
                <div class="row align-items-start">
                    <div class="col-md-6 col-12">
                        <div class="segunda-parte-container"></div>
                        <p id="segunda-parte-titulouno">Exploramos</p>
                        <p id="segunda-parte-titulodos">Nuevas tecnologías</p>
                        <p id="segunda-parte-titulotres">para ayudarte a avanzar </p>
                        <p id="essato-segunda-parte">
                            Ya sea porque necesites aumentar tu facturación, mejorar el posicionamiento de tu marca o definir los mejores procesos para llegar a tus objetivos.
                        </p>	
                    </div>
                    <div class="col-md-6 col-12 position-relative">
                        <img src="{{asset('/images/inicio/chica.jpeg')}}" alt="logo chica" class="img-fluid">
                        <a href="#clientes" class="btn btn-outline-light btn-lg fw-bold border-3 position-absolute top-50 start-50 translate-middle">
                            Clientes
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="col-md-6 col-12">
                    <p id="leyenda-bajo-img">
                        Lleva tu negocio al éxito ya que nuestra meta será simplificar el trayecto, haciéndolo práctico y eficiente.
                    </p>	
                </div>          
            </div>
        </div>
      
        <div class="tercera-parte">
            <div id="tercera-container" class="container">
                <div class="row justify-content-md-left">
                    <div class="col">
                        <h1 class="tercera-parte-titulo">
                            Explorando tu negocio y hagamoslo crecer
                        </h1>
                    </div>
                        <div class="col-md-auto">
                        </div>
                    <div class="col col-lg-2">
                        <a href="#servicios" class="btn btn-outline-danger btn-lg fw-bold border-3">
                            Servicios
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">                 
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Marketing
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                llevemos a tu cliente potencial justo donde quieres que esté: a las puertas de tu negocio.  
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">                 
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Redes Sociales
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Creemos conexiones sólidas con tu audiencia y elevemo la percepción de tu marca.
                            </p>
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
                            <p class="card-text">
                                Diseñemos un espacio digital que cautiva a tus visitantes y los convierte en clientes fieles.
                            </p>
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
                            <p class="card-text">
                                Construyamos una imagen sólida definiendo el valor de tu marca.
                            </p>
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
                            <p class="card-text">
                                Ordenemos tus números, gestionando ingresos, salidas y gastos para garantizar la estabilidad y el crecimiento continuo de tu negocio.
                            </p>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cuarta-parte" class="cuarta-parte">
            <div class="container-fluid">
                <div class="row align-items-start">
                    <div id="cuarta-parte-gris" class="col-md-6 col-12 position-relative">
                        <div id="cuarta-parte-container" class="container">
                            <div class="row">
                                <div class="col align-self-start">

                                </div>
                                <div class="col align-self-center">

                                </div>
                                <div class="col align-self-end">
                                    
                                </div>
                            </div>
                        </div>
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
                            <div data-aos="fade-right" data-aos-easing="ease-in-sine">
                                <img src="{{asset('/images/marketing.png')}}" class="img-fluid" width="500" height="500" alt="marketing">
                                <h3 class="tituloservicios">
                                    MARKETING
                                </h3>
                            </div>
                        </div>
                        <div class="col align-self-center"></div>
                        <div class="col align-self-end"></div>
                </div>
                <div class="row">
                    <div class="col align-self-start"></div>
                        <div class="col align-self-center">
                            <div data-aos="fade-right" data-aos-easing="ease-in-sine">
                                <img src="{{asset('/images/social_media.png')}}" class="img-fluid" width="400" height="400" alt="social media">
                                <h3 class="tituloservicios">
                                    SOCIAL MEDIA
                                </h3>
                            </div>
                        </div>
                    <div class="col align-self-end"></div>
                </div>

                <div class="row">
                    <div class="col align-self-start">
                        <div data-aos="zoom-out-left"></div>   
                    </div>
                    <div class="col align-self-center"></div>
                    <div class="col align-self-end">
                    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1300">
                    |   <img src="{{asset('/images/desarrollo_web.png')}}" class="img-fluid" width="400" height="400" alt="desarrollo web">
                            <h3 class="tituloservicios">
                                DESARROLLO WEB
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col align-self-start"></div>
                    <div class="col align-self-center">
                        <div data-aos="fade-left" data-aos-easing="ease-in-sine">
                            <img src="{{asset('/images/branding.png')}}" class="img-fluid" width="400" height="400" alt="branding">
                            <h3 class="tituloservicios">
                                BRANDING
                            </h3>
                        </div>
                    </div>
                    <div class="col align-self-end"></div>
                </div>
                
                <div class="row">
                    <div class="col align-self-start">
                        <div data-aos="fade-left" data-aos-easing="ease-in-sine">
                            <img src="{{asset('/images/asesoria_financiera.png')}}" class="img-fluid" width="400" height="400" alt="asesoria financiera">
                            <h3 class="tituloservicios">
                                ASESORÍA FINANCIERA
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
                            <br>
                        </div>                           
                    </div>
                </div>
            </div>
        </div>

        <div class="sexta-parte">
            <div class="container-fluid">
                    <div class="row align-items-start">
                        <div id="sexta-parte-gris" class="col-md-4 col-12 position-relative">
                            <iframe width="100%" height="600" src="https://www.youtube.com/embed/XBaVaoGIEbc?si=hmi2R4HLKE1jAw0i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div id="sexta-parte-negro"class="col-md-8 col-12">
                            <h1 class="titulo">Construyamos una marca increíble para tu negocio</h1>
                            <br>
                            <p class="sexta-parte-texto">Aprovecha nuestra experiencia especializada, lo que te permitirá <span class="sexta-fondo-rojo">ahorrar tiempo y recursos</span> al externalizar las actividades de marketing.</p>
                            <br>
                            <p class="sexta-parte-texto">Además, tienes acceso a herramientas avanzadas y recibe estrategias personalizadas que mejoran la <span class="sexta-fondo-rojo">visibilidad de tu marca</span> en línea y optimizan el <span class="sexta-fondo-morado">retorno de la inversión</span> (ROI) mediante un enfoque orientado a resultados.
                            </p>

                        </div>
                    </div>
            </div>
        </div>

        <div class="septima-parte">
            <div class="container-fluid">
                <a href="{{ route('blog.index') }}" class="nav-link">
                    <h1 class="titulo"> Blog </h1>
                </a>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-12">
                        <div class="card text-center">
                            <div class="card-header">
                                <img src="{{asset('/images/blog/django.png')}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cuerpo</h5>
                                <p class="card-text text-justify truncated">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio,     numquam earum inventore distinctio fuga modi corporis repellat unde. Harum perferendis inventore nihil molestiae omnis cumque officiis aut sed voluptatibus quo.
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <h5 class="card-title">Pie</h5>
                                <a href="#" class="btn btn-info btn-sm">Leer Mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                    <div class="card text-center">
                            <div class="card-header">
                                <img src="{{asset('/images/blog/redes.png')}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cuerpo</h5>
                                <p class="card-text text-justify truncated">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quam maxime temporibus cupiditate vel odit vero, vitae quo iure. Molestiae incidunt accusantium dicta est quam recusandae, explicabo quis nobis voluptates?
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <h5 class="card-title">Pie</h5>
                                <a href="#" class="btn btn-info btn-sm">Leer Mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                    <div class="card text-center">
                            <div class="card-header">
                                <img src="{{asset('/images/blog/framework.png')}}" class="card-img-top" alt="...">  
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cuerpo</h5>
                                <p class="card-text text-justify truncated">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, inventore animi, blanditiis ipsum in magnam dolorum consequuntur culpa, voluptas velit molestiae ea sapiente odio voluptatibus cupiditate rem nobis quidem non.</p>
                            </div>
                            <div class="card-footer text-muted">
                                <h5 class="card-title">Pie</h5>
                                <a href="#" class="btn btn-info btn-sm">Leer Mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
<footer>
    <div class="footer-parte">
        <div class="container-fluid">
            <div class="row align-items-start">
                <div id="footer-parte-gris" class="col-md-8 col-12 align-self-stretch">
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-4">
                                <h1>CONTACTANOS</h1>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5"></div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="container">             
                        <div class="row">
                            <div class="col-1">
                            </div>
                            <div class="col-4">
                                <form>
                                    <div class="mb-2">
                                        <label for="nombre" class="form-label">Nombre y apellido</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Mi nombre es" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="telefono" class="form-label">Número de teléfono</label>
                                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Mi numero es" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="trabajo" class="form-label">Trabajo en</label>
                                        <input type="text" class="form-control" id="trabajo" name="trabajo" placeholder="Mi empresa se llama" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="contacto" class="form-label">Contáctanos en</label>
                                        <input type="email" class="form-control" id="contacto" name="contacto" placeholder="micorreo@dominio.com" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="pais" class="form-label">País</label>
                                        <select class="form-select" id="pais" name="pais" required>
                                            <option value="" disabled selected>Selecciona tu país</option>
                                            @foreach ($paises as $pais)
                                                <option value="{{ $pais->id_pais }}">{{ $pais->nombre_pais }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <form>
                                    <div class="mb-2">
                                        <label for="departamento" class="form-label">Departamento/Provincia</label>
                                        <select class="form-select" id="departamento" name="departamento" required>
                                            <option value="" disabled selected>Selecciona tu departamento o provincia</option>
                                            @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id_departamento }}">{{ $departamento->nombre_departamento }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="comoEncontraste" class="form-label">¿Cómo nos encontraste?</label>
                                        <input type="text" class="form-control" id="comoEncontraste" name="comoEncontraste" placeholder="Cuéntanos cómo nos encontraste" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="asunto" class="form-label">Asunto</label>
                                        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Mi asunto es" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="mensaje" class="form-label">Mensaje</label>
                                        <textarea class="form-control" id="mensaje" name="mensaje" rows="6" placeholder="Empieza a escribir aqui" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            </div>
                            <div class="col-1">
                            </div>
                        </div>
                    </div>                  
                </div>
                <div id="footer-parte-negro" class="col-md-4 col-12 position-relative align-self-stretch">
                    <ul>
                        <li class="listado-footer"><a href="">Nosotros</a></li>
                        <li class="listado-footer"><a href="">Portafolio</a></li>
                        <li class="listado-footer"><a href="">Clientes</a></li>
                        <li class="listado-footer"><a href="">Servicios</a></li>
                        <li class="listado-footer"><a href="">ODS</a></li>
                        <li class="listado-footer"><a href="">Empleos</a></li>
                        <li class="listado-footer"><a href="">Pasantías</a></li>
                        <li class="listado-footer"><a href="">Asociados</a></li>
                    </ul>
                    <ul>
                        <li id="dato-personal-footer" class="datos-personal-footer">Quetzaltenango, Guatemala.</li>
                        <li class="datos-personal-footer">3 avenida 8-25 zona 1</li>        
                        <li class="datos-personal-footer">(+502) 77610106 / (+502) 41994781</li>
                    </ul>               
                    <ul>
                        <li class="politicas-footer">Politicas de privacidad</li>
                    </ul>

                    <ul>
                        <li class="red-social-footer"><a href="https://www.behance.net/Damaochoa"><img src="{{asset('/images/youtube.png')}}" class="img-fluid" width="200" height="200" alt="youtube"></a> Behance/essato</li>
                        <li class="red-social-footer"><a href="https://www.linkedin.com/company/essato/?viewAsMember=true"><img src="{{asset('/images/youtube.png')}}" class="img-fluid" width="200" height="200" alt="linkedin"></a> Linkedin/essato</li>
                    </ul>
                </div>
            </div>
        </div>
    <div id="container-footer" class="container">
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
<script src="{{ asset('js/carrousel.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#pais').on('change', function() {
            var paisId = $(this).val();
            if (paisId) {
                $.ajax({
                    url: '/departamentos/' + paisId,
                    type: 'GET',
                    success: function(data) {
                        console.log('Respuesta de la solicitud AJAX:', data);
                        if (Array.isArray(data)) {
                            // Limpiar opciones actuales del selector de departamentos
                            $('#departamento').empty();
                            
                            // Agregar nuevas opciones al selector de departamentos
                            $.each(data, function(index, departamento) {
                                $('#departamento').append('<option value="' + departamento.id_departamento + '">' + departamento.nombre_departamento + '</option>');
                            });
                        } else {
                            console.error('La respuesta de la solicitud AJAX no es un arreglo válido:', data);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error en la solicitud AJAX:', error);
                    }
                });
            } else {
                $('#departamento').empty();
            }
        });
    });
</script>
<script>
    AOS.init();
</script>
</body>
</html>