@extends('layouts.app') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="ESSATO Marketing y Publicidad: Agencia especializada en aumentar tu facturación y llegar a tus objetivos. Ofrecemos servicios de marketing, redes sociales, desarrollo web, branding y asesoría financiera con estrategias personalizadas para mejorar la visibilidad de tu marca y el retorno de inversión de tu negocio. ¡Haz crecer tu marca con nosotros!">
    <meta name="keywords" content="agencia, marketing, aumentar tu facturación, llegar a tus objetivos, crecimiento, servicios, redes sociales, desarrollo web, branding, asesoría financiera, estrategias personalizadas, visibilidad de marca, retorno de inversión, negocio, marca">

    <title>Essato | Registro</title>

    <!-- Fonts -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
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
@section('content')
<main>
    <div class="primera-parte-register">
        <div class="container-fluid">
            <div class="container-sm mb-30">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div id="card-completa" class="card">
                            <div class="card-header">
                                <img src="{{asset('/images/login-icono-inicial.svg')}}" class="img-fluid header-image" alt="fotografia">                       
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row mb-4">
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <img  class="usuariologin" src="{{asset('/images/iconos/usuarioemail.svg')}}" class="img-fluid align-self-center" alt="usuarioemail">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre y apellido" required autocomplete="name" autofocus>
                                                </div>
                                                <div class="col-md-12">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <img class="usuariologin" src="{{asset('/images/iconos/usuarioemail.svg')}}" class="img-fluid align-self-center" alt="usuarioemail">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required autocomplete="email">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                   <!--div class="row mb-4">
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div-->

                                    <div class="row mb-4">
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <img class="usuariologin" src="{{asset('/images/iconos/usuarioemail.svg')}}" class="img-fluid align-self-center" alt="usuarioemail">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div-->

                                    <div class="row mb-4">
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <img class="usuariologin" src="{{asset('/images/iconos/usuarioemail.svg')}}" class="img-fluid align-self-center" alt="usuarioemail">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmar correo electronico</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div-->
                                    <div class="row mb-4">
                                        <div  id="botoningreso" class="col-md-12 d-flex align-items-start justify-content-center" > 
                                            <button type="submit" class="btn btn-custom">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="rayaRoja"></div>
</main>
@endsection      
</body>
</html>


