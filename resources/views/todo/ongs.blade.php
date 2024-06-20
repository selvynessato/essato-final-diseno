<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Essato | ONGS</title>

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/todo/ongs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
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
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-md-8 col-12 parte-blanca">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="display-4 texto-derecha">EMPODERAMOS</h1>
                        </div>                       
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-4">
                            <h1 class="display-2 ongs-texto">ONGS</h1>
                        </div>
                        <div class="col-md-2">
                            <h5 class="ong-soluciones">Con soluciones digitales</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 parte-negra">
                <!-- Contenido de la parte negra -->
            </div>
        </div>
    </div>
</div>
<div class="segunda-parte">
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-md-8 col-12 segunda-parte-blanca">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="display-6 texto-derecha">INNOVADORAS</h1>
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 segunda-parte-negra d-flex align-items-end">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="centrar-mas">Conócenos más</h3>
                        </div>
                        <div class="col-md-12 linea-mas">
                            <hr class="hr-blanca">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto boton-wha">
                            <a href="https://wa.link/a4qy4l" class="btn btn-light" role="button" target="_blank">Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<div class="tercera-parte">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-8 col-12">
                <h1 class="display-1 tercera-texto-izquierdo">DISEÑO WEB</h1>
            </div>
            <div class="col-md-4 col-12">
                <h1 class="display-6 tercera-texto-derecha"></h1>
            </div>
        </div>           
        <div class="row align-items-start">
            <div class="col-md-2 col-12">
                <h1 class="display-6 tercera-texto-izquierdo"></h1>
            </div>
            <div class="col-md-10 col-12">
                <h1 class="display-1 tercera-texto-derecha">REDES SOCIALES</h1>
            </div>
        </div>           
        <div class="row align-items-start">
            <div class="col-md-11 col-12">
                <h3 class="tercera-texto-centro">POSICIONAMIENTO DE MARCAS</h3>
            </div>
        </div>           
    </div>
</div>
<div class="cuarta-parte">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('/images/ongs/asokape.png')}}" class="img-fluid parte-cuatro-img" alt="empresa web">
            </div>
            <div class="col-sm-3">
                <img src="{{asset('/images/ongs/ods-15.png')}}" class="img-fluid parte-cuatro-imguno" alt="ods diseño">
            </div>
            <div class="col-sm-3">
                <img src="{{asset('/images/ongs/redes-sociales.png')}}" class="img-fluid parte-cuatro-imgdos" alt="red social">
            </div>
        </div>
    </div>
</div>
<div class="quinta-parte">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-3 col-12">
                <h1 class="display-1 quinta-texto-izquierdo">+10</h1>
            </div>
            <div class="col-md-3 col-12">
                <h1 class="display-6 quinta-texto-anio">AÑOS</h1>
                <h1 class="display-5 quinta-texto-experiencia">EXPERIENCIA</h1>
            </div>
        </div>  
    </div>
</div>

<div class="sexta-parte">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-3 col-12"></div>
            <div class="col-md-6 col-12">
                <h2 class="sexta-texto-titulo">Somos una agencia de progreso y avance de ONGs</h2>
            </div>
            <div class="col-md-3 col-12"></div>
        </div>  
        <div class="row align-items-start">
            <div class="col-md-3 col-12"></div>
            <div class="col-md-6 col-12">
                <p class="parrajo-sexta-parte">
                    Nos dedicamos a ayudar a las ONGs a alcanzar sus objetivos, maximizar su impacto y conectar con sus audiencias de manera efectiva, asegurando que sus historias y misiones sean vistas y valoradas por el mundo.
                </p>
            </div>
            <div class="col-md-3 col-12"></div>
        </div>  
    </div>
</div>
<div class="septima-parte">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-6 col-12">
                <p class="septimo-parrafo-titulo">
                    Potenciamos <span class="parrafo-negrita">la sostenibillidad y visibilidad </span>de sus acciones
                </p>
            </div>
            <div class="col-md-6 col-12">
                <div class="d-grid gap-2 col-6">
                    <a href="https://wa.link/a4qy4l" class="btn btn-light boton-w" role="button" target="_blank">Whatsapp</a>
                </div>        
            </div>
        </div>  
    </div>
</div>
<div class="octava-parte">
    <div class="container-fluid">
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
</div>
<div class="novena-parte">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-2 col-12"></div>
            <div class="col-md-4 col-12">
                <img src="{{asset('/images/ongs/teresa-branding.png')}}" class="img-fluid parte-novena-img" alt="branding">
                <h2 class="empresa-tituloUno">Teresa</h2>
                <p class="empresa-subtituloUno">Branding</p>
            </div>
            <div class="col-md-4 col-12">
                <video src="{{asset('/images/ongs/teresa-video.mp4')}}" class="object-fit-contain video-teresa" autoplay muted playsinline loop></video>
                <h2 class="empresa-tituloUno">Teresa</h2>
                <p class="empresa-subtituloUno">Redes Sociales</p>
            </div>
            <div class="col-md-2 col-12"></div>
        </div>  
    </div>
</div>
<div class="decima-parte">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-2 col-12"></div>
            <div class="col-md-4 col-12">
                <img src="{{asset('/images/ongs/campania-essato-ecoxela-redes.png')}}" class="img-fluid parte-decima-imgUno" alt="branding">
                <h2 class="empresa-tituloUno">Eco-Xela</h2>
                <p class="empresa-subtituloUno">Redes Sociales</p>
            </div>
            <div class="col-md-4 col-12">
                <img src="{{asset('/images/ongs/ecoxelapagina.png')}}" class="img-fluid parte-decima-img" alt="branding">
                <h2 class="empresa-tituloUno">Eco-Xela</h2>
                <p class="empresa-subtituloUno">Pagina Web</p>
            </div>
            <div class="col-md-2 col-12"></div>
        </div>  
    </div>
</div>
<div class="once-parte">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3"></div>
            <div class="col-12 col-sm-6">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="{{ url('/ods') }}" class="btn btn-outline-danger organizaciones" role="button">Ver más organizaciones</a>
                </div>
            </div>
            <div class="col-12 col-sm-3"></div>
        </div>
    </div>
</div>
</main>
<footer style="background:black;">
    @include('componentes.footer')
</footer>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/carrousel.js') }}"></script> 
</body>
</html>