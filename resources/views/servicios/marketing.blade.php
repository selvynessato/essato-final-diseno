<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Essato | Marketing</title>

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/servicios/marketing.css') }}" rel="stylesheet">
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
    <script src="https://kit.fontawesome.com/6ecb3f0ad6.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="fixed-top">
    @include('componentes.header')
</header>
<main>
<div class="primera-parte">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p class="texto-derecha">
                    Desarrollamos y ejecutamos estrategias integrales de marketing con un enfoque centrado en resultados. Nuestro sistema de gestión optimiza continuamente cada proceso, garantizando la eficacia y eficiencia de nuestras campañas. 
                </p>
            </div>                
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div class="segunda-parte">
    <div class="container d-flex flex-column justify-content-center h-100">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 maketing-partesegunda">
                <h1 class="display-2">Marketing 360</h1>
            </div>                
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="hr-blanca"></div>
            </div>                
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ver-linea">
                <form class="row g-3 justify-content-center">
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="Con enfoque a resultados" readonly>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-light">Whatsapp</button>
                    </div>
                </form>               
            </div>                
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<div class="tercera-parte">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('/images/servicios/marketing/marketing-largo.jpg')}}" class="img-fluid cuaderno-tercera" alt="cuaderno">
            </div>    
            <div class="col-md-6 derecha-espacio">
                <ul>
                    <li class="decorated-text">
                        <p><span class="negrita-span">Campañas Multicanal:</span><br>Ejecutamos campañas que combinan medios digitales y tradicionales para maximizar el alcance.
                        </p>
                    </li>
                    <li class="decorated-text">
                        <p><span class="negrita-span">Publicidad en Redes Sociales y Google Ads:</span><br>Creamos y gestionamos campañas en plataformas clave para alcanzar a tu audiencia.
                        </p>
                    </li>
                    <li class="decorated-text">
                        <p><span class="negrita-span">Estrategias de Marketing Offline:</span><br>Complementamos el marketing digital con tácticas offline efectivas.
                        </p>
                    </li>
                    <li class="decorated-text">
                        <p><span class="negrita-span">Optimización Continua:</span><br>Monitoreamos y ajustamos constantemente las estrategias para asegurar el mejor rendimiento.
                        </p>
                    </li>
                    <li class="decorated-text">
                        <p><span class="negrita-span">Análisis de Datos:</span><br>Utilizamos herramientas avanzadas para medir y analizar el rendimiento de todas las campañas.
                        </p>
                    </li>
                    <li class="decorated-text">
                        <p><span class="negrita-span">Personalización:</span><br>Adaptamos cada campaña a las necesidades específicas de tu negocio y audiencia.
                        </p>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
</div>
<div class="cuarta-parte">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="negrita-span">Mayor Visibilidad y Coherencia de Marca:</p>
                <div class="hr-negra"></div>
                <p class="justificado">
                    Tu marca será más reconocida y recordada gracias a la presencia en múltiples canales asegurandonos que todos los mensajes y tácticas estén alineados para una experiencia de marca consistente.
                </p>
            </div>
            <div class="col-md-4">
                <p class="negrita-span">Aumento de Leads y Ventas:</p>
                <div class="hr-negra"></div>
                <p class="justificado">
                    Las estrategias integrales y optimizadas impulsarán la generación de leads y las conversiones adaptadas a las tendencias del mercado y las necesidades del negocio.
                </p>
            </div>
            <div class="col-md-4">
                <p class="negrita-span">Retorno de Inversión (ROI):</p>
                <div class="hr-negra"></div>
                <p class="justificado">
                Maximizamos el ROI al combinar las tácticas más efectivas asegurandonos asegurandonos tener un rendimiento optimo para tus canales de marketing.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="quinta-parte">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <video class="embed-responsive-item" src="{{ asset('/images/servicios/marketing/somos_essato.mp4') }}" autoplay loop muted playsinline></video>
            </div>
            <div class="col-sm-3 derecha-espacio">
                <iframe 
                    src="https://www.tiktok.com/embed/7236932663855025414" 
                    title="Video TikTok" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
<div class="sexta-parte">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>            
            <div class="col-md-4">
                <p class="centrar-negrita">
                    ¡Potencia tu marca con una estrategia de marketing 360!
                </p>
            </div>        
            <div class="col-md-3">
            <button>
                <span>CONTACTANOS</span>
                <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                    <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
                </svg>
            </button>            
            </div>        
            <div class="col-md-2"></div>                        
        </div>
    </div>  
</div>
<div class="septima-parte">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>            
            <div class="col-md-3">
                <h5 class="testimonio">Testimonios</h5>
                <div class="hr-testimonio"></div>
            </div>            
            <div class="col-md-4"></div>            
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>    
        </div>  
    </div>
    <div class="container">
        <div class="row quitar-espacio">
            <div class="col-md-3 testminoTarjetas">
                <div class="card">
                    <div class="card-body titulo-empresa">
                        <p class="card-text"><small class="text-muted">Juan Marroquin - Delicarnitas</small></p>
                        <p class="card-text">
                            Me gustó mucho lo profesionales que son, el servicio al cliente es bueno, cumplen con los tiempos de entrega y el resultado de mi logo me gustó mucho. Los recomiendo al 100%.
                        </p>
                    </div>
                    <div class="img-container">
                        <img src="{{asset('/images/empresa/25Logo-delicarnitas.png')}}" class="card-img-top imangenTestimonio" alt="cuaderno">
                    </div>
                </div>
            </div>
            <div class="col-md-3 testminoTarjetas">
                <div class="card">
                    <div class="card-body titulo-empresa">
                        <p class="card-text"><small class="text-muted">Juan Marroquin - Delicarnitas</small></p>                        
                        <p class="card-text">
                            Un equipo muy profesional, con experiencia en el campo y con excelente atención al cliente y precios accesibles. Los recomiendo.
                        </p>
                    </div>
                    <img src="{{asset('/images/empresa/43cafeTeresa.png')}}" class="card-img-top imangenTestimonio" alt="">
                </div>
            </div>
            <div class="col-md-3 testminoTarjetas">
                <div class="card">
                    <div class="card-body titulo-empresa">
                        <p class="card-text"><small class="text-muted">Juan Marroquin - Delicarnitas</small></p>
                        <p class="card-text">
                            Me gustó mucho lo profesionales que son, el servicio al cliente es bueno, cumplen con los tiempos de entrega y el resultado de mi logo me gustó mucho. Los recomiendo al 100%.
                        </p>
                    </div>
                    <img src="{{asset('/images/servicios/marketing/VR-LENTES.png')}}" class="card-img-top imangenTestimonio" alt="">
                </div>
            </div>
            <div class="col-md-3 testminoTarjetas">
                <div class="card">
                    <div class="card-body titulo-empresa">
                        <p class="card-text"><small class="text-muted">Duglas Juarez - Dental Libano</small></p>
                        <p class="card-text">
                            La calidad y el diseño que manejan son muy buenos súper recomendados !!!
                        </p>
                    </div>
                    <img src="{{asset('/images/empresa/12punto-rojo.png')}}" class="card-img-top imangenTestimonio" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="octava-parte">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-12">
                <h1 class="display-1 font-uno">Vive la experiencia digital</h1>
            </div>                    
        </div>                    
        <div class="row w-100">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p class="octava-con">con</p>
                </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row w-100">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="display-1 font-dos">Essato</h1>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
<div class="novena-parte">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <h5 class="testimonio">¿Preguntas frecuentes?</h5>
                <div class="hr-testimonio"></div>
            </div>
            <div class="col-md-4 col-12"></div>
            <div class="col-md-4 col-12"></div>
        </div>  
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($preguntasFrecuentes as $index => $preguntaFrecuente)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{ $index }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false" aria-controls="flush-collapse{{ $index }}">
                                    {{ $preguntaFrecuente->titulo_preguntafrecuente }}
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $index }}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    {{ $preguntaFrecuente->descrip_preguntafrecuente }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>  
        </div>  
    </div>
</div>
<div class="decima-parte">
    <div class="container-fluid">
        <a href="{{ url('/blog') }}" class="nav-link">
            <h1 class="titulo"> Blog</h1>
        </a>
        <div class="hr-testimonio"></div>
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
<script>
  AOS.init();
</script>
</body>
</html>