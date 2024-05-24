<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Essato | ods</title>

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ods/ods.css') }}" rel="stylesheet">
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
                    <div id="primera-parte-blanca" class="col-md-1 col-12 align-self-stretch">
                    </div>
                    <div id="primera-parte-blanca" class="col-md-5 col-12 align-self-stretch">
                        <div class="container">
                            <div class="col-md-12">
                                <div class="texto-inicio-empresa">     
                                    <h1 class="display-1">ODS</h1>
                                    <h2> ¿Que objetivos de desarrollo estamos alcanzando y apoyando?</h2>
                                        <p>
                                            La empresa Essato en sus operaciones se centra un 33.33% en contribuir hacia el desarrollo sostenible  y la economía global; esto significa que se busca crear soluciones que respondan a las realidades diarias de las personas por ello nos encontramos trabajando y apoyando los objetivos de desarrollo sostenible en sus siglas (ODS) siendo los siguientes: 
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div id="primera-parte-negro" class="col-md-6 col-12 position-relative align-self-stretch">
                    </div> 
                </div>
            </div>
        </div>

        <div class="segunda-parte">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-md-12">
                        <div class="texto-inicio-empresa">
                            <h1 class="display-1">Objetivos</h1>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="item">                 
                            <div class="card">
                                <div class="card-header">
                                    <h3>
                                        Crecimiento economico
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Fomentar un crecimiento económico y sostenible, con empleo pleno y productivo para todos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">                 
                            <div class="card">
                                <div class="card-header">
                                    <h3>
                                        Equidad de genero
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Promover la igualdad de género, empoderando a todas las mujeres y niñas en todos los ámbitos de la vida.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 padding-equal d-flex align-items-center justify-content-center">
                        <img src="{{asset('/images/empresa-images-multiples/essato-ods.png')}}" class="img-fluid imagen-ods" alt="imagen-ods">
                    </div>
                    <div class="col-sm-3 padding-equal d-flex align-items-center justify-content-center">
                        <div class="item">                 
                            <div class="card">
                                <div class="card-header">
                                    <h3>
                                        Educación de calidad
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Garantizar una educación inclusiva, equitativa y de calidad, promoviendo oportunidades de aprendizaje para todos.
                                    </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <div class="quinta-parte">
            <div class="container">
                <div class="row justify-content-star">
                    <div class="col-md-12">
                        <div class="texto-inicio-empresa">
                            <h1 class="display-1">Organizaciones</h1>
                        </div>
                    </div>
                    @foreach($empresas as $empresa)
                        @if($empresa->tipoEmpresa->id_tipoEmpresa == 1)
                            <div class="col-md-2 col-12 text-right mb-2 imagen-redonda">
                                <img src="{{ asset($empresa->img_empresa) }}" class="img-fluid imagen-empresas" alt="Empresa">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div> 
        </div>

        <div class="cuarta-parte">
            <div class="container-fluid">               
                <div class="row">
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-1.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-ods/ods-2.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-3.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-ods/ods-4.png')}}" class="" alt="Cliente-ods">
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-5.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-ods/ods-6.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-7.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-morado">
                        <img src="{{asset('/images/empresa-ods/ods-8.png')}}" class="" alt="Cliente-ods">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-9.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-10.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-11.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-12.png')}}" class="" alt="Cliente-ods">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-13.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-14.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-15.png')}}" class="" alt="Cliente-ods">
                    </div>
                    <div class="col-sm-3 fondo-rosado">
                        <img src="{{asset('/images/empresa-ods/ods-16.png')}}" class="" alt="Cliente-ods">
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
                                <h1 class="display-1">Alianzas</h1>
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