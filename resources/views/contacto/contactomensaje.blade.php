@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes de Contacto</title>
    <!-- Otros scripts y estilos -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/mensaje-eliminar.js') }}"></script>
</head>
<body>
<main>
    <div class="container-fluid">
        
        <!-- Tabla de listado de mensajes de contacto -->
        <div class="p-5 table-responsive">
            <!-- Mensajes de éxito o error -->
            @if(session('creacion-exitosa'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('creacion-exitosa') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('actualizacion-exitosa'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('actualizacion-exitosa') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('eliminacion-exitosa'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('eliminacion-exitosa') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Tabla de mensajes de contacto -->
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-white encabezadoTabla">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Asunto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($mensajes as $mensaje)
                    <tr>
                        <td>{{ $mensaje->id_contacto }}</td>
                        <td width="200">{{ $mensaje->nombre_contacto }}</td>
                        <td width="200">{{ $mensaje->correo_contacto }}</td>
                        <td width="150">{{ $mensaje->telefono_contacto }}</td>
                        <td>{{ $mensaje->asunto_contacto }}</td>
                        <td>
                            <!-- Botón para abrir modal de edición -->
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar-{{ $mensaje->id_contacto }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Modal Editar Mensaje de Contacto -->
                    <div class="modal fade" id="modalEditar-{{ $mensaje->id_contacto }}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditarLabel">Editar Mensaje de Contacto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulario para editar mensaje de contacto -->
                                    <form action="{{ route('contacto.update', $mensaje->id_contacto) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="id_contacto" class="form-label">ID</label>
                                                    <input type="text" class="form-control" name="id_contacto" id="id_contacto" value="{{ $mensaje->id_contacto }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="nombre_contacto" class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" name="nombre_contacto" id="nombre_contacto" value="{{ $mensaje->nombre_contacto }}" required>
                                                </div>
                                            </div>
                                        </div>
                                                <div class="mb-3">
                                                    <label for="correo_contacto" class="form-label">Correo</label>
                                                    <input type="email" class="form-control" name="correo_contacto" id="correo_contacto" value="{{ $mensaje->correo_contacto }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telefono_contacto" class="form-label">Teléfono</label>
                                                    <input type="text" class="form-control" name="telefono_contacto" id="telefono_contacto" value="{{ $mensaje->telefono_contacto }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="trabajoen_contacto" class="form-label">Lugar de Trabajo</label>
                                                    <input type="text" class="form-control" name="trabajoen_contacto" id="trabajoen_contacto" value="{{ $mensaje->trabajoen_contacto }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="asunto_contacto" class="form-label">Asunto</label>
                                                    <input type="text" class="form-control" name="asunto_contacto" id="asunto_contacto" value="{{ $mensaje->asunto_contacto }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pais_contacto" class="form-label">País</label>
                                                    <input type="text" class="form-control" name="pais_contacto" id="pais_contacto" value="{{ $mensaje->pais_contacto }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="departamento_contacto" class="form-label">Departamento</label>
                                                    <input type="text" class="form-control" name="departamento_contacto" id="departamento_contacto" value="{{ $mensaje->departamento_contacto }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="mensaje_contacto" class="form-label">Mensaje</label>
                                                    <textarea class="form-control" name="mensaje_contacto" id="mensaje_contacto" rows="3" required>{{ $mensaje->mensaje_contacto }}</textarea>
                                                </div>
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Responder</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{ $mensajes->links() }}
            </div>
        </div>
    </div>
</main>
</body>
</html>

@endsection