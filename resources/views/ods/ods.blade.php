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
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius magni voluptates porro, quos similique quibusdam ab fugit pariatur? Labore ullam modi est cumque quasi facilis possimus, non quidem suscipit quod!
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque suscipit quo corrupti incidunt eveniet veniam sapiente commodi, mollitia, possimus enim odit, voluptas tenetur in odio perferendis molestias quam modi? Incidunt!
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis aperiam modi in dolorum fugit harum nostrum rem, labore tempora aspernatur, veritatis nihil culpa ad laudantium minus placeat nobis porro. Sed.
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
                    </div>
                    <div class="col-sm-6 padding-equal d-flex align-items-center justify-content-center">
                        <img src="{{asset('/images/empresa-images-multiples/essato-ods.png')}}" class="img-fluid imagen-ods" alt="imagen-ods">
                    </div>
                    <div class="col-sm-3 padding-equal d-flex align-items-center justify-content-center">
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
                    <div class="col-sm-4 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/cliente-1.png')}}" class="" alt="Cliente">
                    </div>
                    <div class="col-sm-4 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/cliente-2.png')}}" class="" alt="Cliente">
                    </div>
                    <div class="col-sm-4 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/cliente-3.png')}}" class="" alt="Cliente">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/cliente-4.png')}}" class="" alt="Cliente">
                    </div>
                    <div class="col-sm-4 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/cliente-5.png')}}" class="" alt="Cliente">
                    </div>
                    <div class="col-sm-4 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/cliente-6.png')}}" class="" alt="Cliente">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/cliente-1.png')}}" class="" alt="Cliente">
                    </div>
                    <div class="col-sm-4 fondo-morado">
                        <img src="{{asset('/images/empresa-carousel/cliente-2.png')}}" class="" alt="Cliente">
                    </div>
                    <div class="col-sm-4 fondo-rosado">
                        <img src="{{asset('/images/empresa-carousel/cliente-3.png')}}" class="" alt="Cliente">
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