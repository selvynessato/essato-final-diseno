<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essato | Blogs</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
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
        @include('componentes.header')
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
                    <form action="{{ route('filtrar-blogs') }}" method="GET">
                        @csrf
                        @foreach($categorias as $categoria)
                            <button type="submit" name="id_categoria" value="{{ $categoria->id_categoria }}" class="btn btn-light custom-btn">{{ $categoria->nombre_categoria }}</button>
                        @endforeach
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="septima-parte">
        <div class="container-fluid">             
            <div class="d-flex justify-content-end">
                {{ $blogs->links() }}    
            </div>
            <div class="row justify-content-left">
                @foreach ($blogs as $blog)    
                <div class="col-md-4 col-12" id="tarjeta-espacio" >
                    <div class="card text-center">
                        <div class="card-header">
                            <img src="{{ asset($blog->img_blog) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {!! $blog->nombre_blog !!}
                            </h5>
                            <p class="card-text text-justify truncated">
                                {!! $blog->descripcion_blog !!}
                            </p>
                        </div>
                        <div class="card-footer text-muted">  
                            <a href="{{ route('blog.detalle', $blog->slug_blog) }}" class="btn btn-info btn-sm">
                                Leer Más
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                {{ $blogs->links('pagination::bootstrap-4') }}    
            </div>
        </div>
    </div>
</main>
<footer style="background:black;">
    @include('componentes.footer')
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>


