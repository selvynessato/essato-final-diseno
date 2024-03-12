@extends('layouts.app')

@section('content')
<main>
    <div class="fotoCamara">
        <img src="{{asset('/images/fondologin.jpg')}}" class="img-fluid" alt="fotografia">
    </div>
    <div class="rayaRoja">
        
    </div>

    <div class="container-sm mb-30">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{asset('/images/login-icono-inicial.svg')}}" class="img-fluid" alt="fotografia">                       
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-4" id="usuarioEmail">
                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <img  class="usuariologin" src="{{asset('/images/iconos/usuarioemail.svg')}}" class="img-fluid align-self-center" alt="usuarioemail">
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="USUARIO">
                                        </div>
                                        <div class="col-md-12">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4" id="usuarioPass">
                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <img class="usuariologin" src="{{asset('/images/iconos/usuariopass.svg')}}" class="img-fluid align-self-center" alt="fotografia">
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="********">
                                        </div>
                                        <div class="col-md-12">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div  id="botoningreso" class="col-md-12 d-flex align-items-start justify-content-center" > <!-- Agrega clases para alinear el contenido -->
                                    <button type="submit" class="btn btn-custom">
                                        {{ __('Login') }}
                                    </button>
                                </div>                              
                            </div>
                            
                            <div class="row mb-4">
                                <div id="recordar" class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordar') }}
                                        </label>
                                    </div>
                                </div>
                                <div id="olvidarcontrasena" class="col-md-6">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidate tu contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div id="rgratis" class="col-md-12">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Registrate para recuersos gratis...!') }}
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <img src="{{asset('/images/imagen-footer.svg')}}" class="img-fluid" alt="fotografia" style="width:100%; height:1px">                                   
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
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
                        <img src="{{asset('/images/facebook.png')}}" class="img-fluid" alt="facebook">
                    </div>
                    <div class="social-icon">
                        <img src="{{asset('/images/instagram.png')}}" class="img-fluid" alt="instagram">
                    </div>
                    <div class="social-icon">
                        <img src="{{asset('/images/tik-tok.png')}}" class="img-fluid" alt="tik-tok">
                    </div>
                    <div class="social-icon">
                        <img src="{{asset('/images/youtube.png')}}" class="img-fluid" alt="youtube">
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

@endsection
