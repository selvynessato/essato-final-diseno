@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: linear-gradient(#f02c2d, #bf3b79,#754ee6);margin-top:100px; padding-top:50px;">
                <div class="card-header" style="text-align: center; color:white">
                    <h1> Essato</h1>
                    <strong><h2>Recursos gratis</h2></strong>
                </div>
                
                <div class="card-body" style="text-align: justify; color:white">
                    <section>
                        ¡Explora una gama de recursos valiosos con un solo clic en el botón "Recursos"! Sumérgete en un mundo lleno de nuevos conocimientos y herramientas gratuitas que te esperan. ¡No esperes más, pulsa el botón y descubre recursos útiles sin costo alguno!
                    </p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-footer" style="text-align: center; padding-bottom:50px;">
                    <a href="{{ url('/recurso') }}" class="btn btn-lg btn-danger">
                        Recursos
                    </a>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection