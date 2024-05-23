<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Essato | Clientes</title>

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/empresa/empresa.css') }}" rel="stylesheet">
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
            <div class="container">
                <div class="row justify-content-md-left">
                    <div class="col-md-auto">
                        <div class="texto-inicio">     
                            <h1 id="essato-titulo">Clientes</h1>
                        </div>   
                    </div>
                </div>
            </div>
        </div>

        <div class="segunda-parte">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-1.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-2.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-3.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-4.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-5.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-6.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-7.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-8.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-9.png')}}" class="img-fluid" alt="Cliente">
                </div>
                <div class="item">
                    <img src="{{asset('/images/empresa-carousel/cliente-10.png')}}" class="img-fluid" alt="Cliente">
                </div>
            </div>
        </div>

        <div class="tercera-parte">
            <h3 id="essato-titulo-dos">Ellos han experimentado el crecimiento de su negocio</h3>
        </div>

        <div class="cuarta-parte">
            <div class="container-fluid">               
                <div class="row">
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-1.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/arte-2.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-3.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/arte-4.png')}}" class="" alt="Arte">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-5.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/arte-6.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-7.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/arte-8.png')}}" class="" alt="Arte">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-9.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-10.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/arte-11.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-12.png')}}" class="" alt="Arte">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-13.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/arte-14.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-15.png')}}" class="" alt="Arte">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/arte-16.png')}}" class="" alt="Arte">
                    </div>
                </div>
            </div>
        </div>

        <div class="quinta-parte">
            <div class="container">
                <div class="row justify-content-star">
                    <div class="col-md-12">
                        <div class="texto-inicio-empresa">     
                            <h1 id="essato-titulo-empresa">Empresas</h1>
                        </div>
                    </div>
                    @foreach($empresas as $empresa)
                        @if($empresa->tipoEmpresa->id_tipoEmpresa == 2)
                            <div class="col-md-2 col-12 text-right mb-2 imagen-redonda">
                                <img src="{{ asset($empresa->img_empresa) }}" class="img-fluid imagen-empresas" alt="Empresa">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div> 
        </div>

        <div class="sexta-parte">
            <div class="container">
                <div class="container-fluid">
                    <div class="row align-items-start">
                        <div class="col-md-6 col-12 text-justify">
                            <p>
                            Nuestra razón de ser <span class="cursiva-negrita">“Llevar de la mano al cliente tanto como sea posible, por ello planificamos, medimos y cuantificamos tus objetivos de manera que tengas resultados efectivos y funcionales.“</span>
                            </p>
                        </div>
                        <div class="col-md-6 col-12 text-center">
                            <a href="https://wa.link/a4qy4l" class="btn btn-outline-danger boton-whatsapp" role="button" target="_blank">Contáctanos whatsapp</a>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>

        <div class="septima-parte">
            <div class="container">
                <div class="container-fluid">
                    <div class="row align-items-start">
                        <div class="col-md-6 col-12 text-justify">
                            <div class="texto-inicio-empresa">     
                                <h1 id="essato-titulo-empresa">Alianzas</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 text-center">
                            <div class="row">
                                @foreach($empresas as $empresa)
                                    @if($empresa->tipoEmpresa->id_tipoEmpresa == 3)
                                        <div class="col-md-4 col-12 mb-2 imagen-redonda">
                                            <img src="{{ asset($empresa->img_empresa) }}" class="img-fluid imagen-empresas" alt="Empresa">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>

        <div class="octava-parte">
            <div class="container">
                <img src="{{ asset('/images/empresa-images-multiples/portafolio.png') }}" class="img-fluid imagen-cliente-portafolio" alt="portafolio">        
            </div>
        </div>

        <div class="novena-parte">
            <div class="container" id="caja-color">
                <div class="col-md-12 col-12 text-center">
                    <h1 class="display-2">ODS en Essato</h1>
                    <h3>Visita las organizaciones con las que hemos trabajado</h3>
                </div>
            </div>
        </div>

        <div class="decima-parte">
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
    <footer style="background:black;">
        @include('componentes.footer')
    </footer>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/carrousel-cliente.js') }}"></script>
</body>
</html>
