<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="ESSATO Marketing y Publicidad: Agencia especializada en aumentar tu facturación y llegar a tus objetivos. Ofrecemos servicios de marketing, redes sociales, desarrollo web, branding y asesoría financiera con estrategias personalizadas para mejorar la visibilidad de tu marca y el retorno de inversión de tu negocio. ¡Haz crecer tu marca con nosotros!">
    <meta name="keywords" content="agencia, marketing, aumentar tu facturación, llegar a tus objetivos, crecimiento, servicios, redes sociales, desarrollo web, branding, asesoría financiera, estrategias personalizadas, visibilidad de marca, retorno de inversión, negocio, marca">

    <title>Essato | Inicio</title>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>
    <header class="fixed-top">
        @include('componentes.header')
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
                <iframe width="100%" height="600" src="https://www.youtube.com/embed/9vQPUpFCTI8?si=sCLVe_4IuzYwvMzn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <a href="{{ url('/empresa') }}" class="btn btn-outline-light btn-lg fw-bold border-3 position-absolute top-50 start-50 translate-middle">
                            Clientes
                        </a>
                    </div>
                </div>
            </div> <!-- Cierre del contenedor externo -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <p id="leyenda-bajo-img">
                            Lleva tu negocio al éxito ya que nuestra meta será simplificar el trayecto, haciéndolo práctico y eficiente.
                        </p>	
                    </div>          
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
                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/XBaVaoGIEbc?si=hmi2R4HLKE1jAw0i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="quinta-parte">
            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                        <div data-aos="fade-right"
                            data-aos-offset="500"
                            data-aos-easing="ease-in-sine">
                            <img src="{{asset('/images/marketing.png')}}" class="img-fluid" alt="marketing">
                            <h3 class="tituloservicios">
                                MARKETING
                            </h3>
                        </div>
                    </div>
                    <div class="col align-self-center">
                    
                    </div>
                    <div class="col align-self-end">
                    
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                        
                    </div>
                    <div class="col align-self-center">
                        <div data-aos="fade-right"
                            data-aos-offset="600"
                            data-aos-easing="ease-in-sine">
                            <img src="{{asset('/images/social_media.png')}}" class="img-fluid" alt="social_media">
                            <h3 class="tituloservicios">
                                SOCIAL MEDIA
                            </h3>
                        </div>                  
                    </div>
                    <div class="col align-self-end">
                    
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                        
                    </div>
                    <div class="col align-self-center">
                
                    </div>
                    <div class="col align-self-end">
                        <div data-aos="fade-down"
                            data-aos-easing="linear"
                            data-aos-duration="1700">
                            <img src="{{asset('/images/desarrollo_web.png')}}" class="img-fluid" alt="desarrollo_web">
                            <h3 class="tituloservicios">
                                DESARROLLO WEB
                            </h3>                    
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                        
                    </div>
                    <div class="col align-self-center">
                        <div data-aos="fade-left"
                            data-aos-offset="600"
                            data-aos-easing="ease-in-sine">
                            <img src="{{asset('/images/branding.png')}}" class="img-fluid" alt="branding">
                            <h3 class="tituloservicios">
                                BRANDING
                            </h3>                        
                        </div>                                 
                    </div>
                    <div class="col align-self-end">
                        
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                        <div data-aos="fade-left"
                            data-aos-offset="500"
                            data-aos-easing="ease-in-sine">
                            <img src="{{asset('/images/asesoria_financiera.png')}}" class="img-fluid" alt="asesoria_financiera">
                            <h3 class="tituloservicios">
                                ASESORÍA FINANCIERA
                            </h3>
                        </div>                                                                          
                    </div>
                    <div class="col align-self-center">

                    </div>
                    <div class="col align-self-end">
                        
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
                <a href="{{ url('/blog') }}" class="nav-link">
                    <h1 class="titulo"> Blog</h1>
                </a>
                <div class="row justify-content-center">
                    @foreach($blogsAleatorios as $blog)
                        <div class="col-md-4 col-12">
                            <div class="card text-center">
                                <div class="card-header">
                                    <img src="{{asset($blog->img_blog)}}" class="card-img-top" alt="Blog imagen">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{!! $blog->nombre_blog !!}</h5>
                                    <p class="card-text text-justify truncated">{!! $blog->descripcion_blog !!}</p>
                                </div>
                                <div class="card-footer text-muted">
                                    <a href="{{ route('blog.detalle', $blog->slug_blog) }}" class="btn btn-info btn-sm">Leer Más</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <div class="col-11">
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
                            <div class="col-md-10">
                                <div  id ="cardcolor" class="card">
                                    <div class="card-body">
                                        @if(session('success'))
                                            <script src="{{ asset('js/mensaje.js') }}"></script>
                                        @endif
                                        <form method="POST" action="{{ route('contacto.store') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="mb-2">
                                                        <label for="nombre" class="form-label">Nombre y apellido</label>
                                                        <input type="text" class="form-control" id="nombre" name="nombre_contacto" placeholder="Mi nombre es" required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="telefono" class="form-label">Número de teléfono</label>
                                                        <input type="number" class="form-control" id="telefono" name="telefono_contacto" placeholder="Mi número es" required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="trabajo" class="form-label">Trabajo en</label>
                                                        <input type="text" class="form-control" id="trabajo" name="trabajoen_contacto" placeholder="Mi empresa se llama" required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="contacto" class="form-label">Contáctanos en</label>
                                                        <input type="email" class="form-control" id="contacto" name="correo_contacto" placeholder="micorreo@dominio.com" required>
                                                    </div>
                                                    <div class="mb-2">
                                                    <label for="pais" class="form-label">País</label>
                                                    <select class="form-select" id="pais" name="pais_contacto" required onchange="cargarDepartamentos()">
                                                        <option value="" disabled selected>Selecciona tu país</option>
                                                        @foreach ($paises as $pais)
                                                            <option value="{{ $pais->id_pais }}">{{ $pais->nombre_pais }}</option>
                                                        @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2">
                                                    <label for="departamento" class="form-label">Departamento/Provincia</label>
                                                    <select class="form-select" id="departamento" name="departamento_contacto" required>
                                                        <option value="" disabled selected>Selecciona tu departamento o provincia</option>
                                                        <!-- Opciones de departamentos -->
                                                    </select>
                                                </div>
                                            <div class="mb-2">
                                                <label for="comoEncontraste" class="form-label">¿Cómo nos encontraste?</label>
                                                    <select class="form-select" id="comoEncontraste" name="comoEncontraste_contacto" required>
                                                    <option value="" disabled selected>Selecciona cómo nos encontraste</option>
                                                        @foreach ($encontraressatos as $encontraressato)
                                                            <option value="{{ $encontraressato->id_encontraressato }}">{{ $encontraressato->nombre_encontraressato }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="asunto" class="form-label">Asunto</label>
                                                <input type="text" class="form-control" id="asunto" name="asunto_contacto" placeholder="Mi asunto es" required>
                                            </div>
                                                <div class="mb-2">
                                                <label for="mensaje" class="form-label">Mensaje</label>
                                                <textarea class="form-control" id="mensaje" name="mensaje_contacto" rows="4" placeholder="Empieza a escribir aquí" required></textarea>
                                                </div>
                                                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
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
                        <li class="listado-footer"><a href="{{ url('/empresa') }}">Clientes</a></li>
                        <li class="listado-footer"><a href="">Servicios</a></li>
                        <li class="listado-footer"><a href="{{ url('/ods') }}">ODS</a></li>
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
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <li class="red-social-footer"><a href="https://www.facebook.com/essatomarketing" target="_blank"><img src="{{asset('/images/facebook.png')}}" class="img-fluid" alt="facebook"> Facebook</a></li>
                                    <li class="red-social-footer"><a href="https://www.instagram.com/essatomarketing/" target="_blank"><img src="{{asset('/images/instagram.png')}}" class="img-fluid" alt="instagram"> Instagram</a></li>
                                </div>
                                <div class="col-sm">
                                    <li class="red-social-footer"><a href="https://www.tiktok.com/@essato_marketing" target="_blank"><img src="{{asset('/images/tik-tok.png')}}" class="img-fluid" alt="tiktok"> Tik tok</a></li>
                                    <li class="red-social-footer"><a href="https://www.youtube.com/@essato_marketing" target="_blank"><img src="{{asset('/images/youtube.png')}}" class="img-fluid" alt="youtube"> Youtube</a></li>
                                </div>
                                <div class="col-sm">
                                    <li class="red-social-footer"><a href="https://www.behance.net/Damaochoa" target="_blank"><img src="{{asset('/images/behance.png')}}" class="img-fluid" alt="behance"> Behance</a></li>
                                    <li class="red-social-footer"><a href="https://www.linkedin.com/company/essato/?viewAsMember=true" target="_blank"><img src="{{asset('/images/linkedin.png')}}" class="img-fluid" alt="linkedin"> Linkedin</a></li>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>                            
    <div id="container-footer" class="container">
        <div class="row">
            <div class="col-md-2 d-none d-md-block" style="border:none;"></div> 
            <div class="col-md-6">
                <p class="text-center text-md-end">&copy; Copyringht Essato Marketing y Publicidad - 2024</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/carrousel.js') }}"></script>
<script>AOS.init();</script>
<script src="{{ asset('js/paisdepto.js') }}"></script>
</body>
</html>