@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <!-- Otros scripts y estilos -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/mensaje-eliminar.js') }}"></script>
</head>
<body>
<main>
    <div class="container">
        <!-- Modal Crear Actividad -->
        <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCrearLabel">Agregar Actividad</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario para crear nueva actividad -->
                        <form action="{{ route('actividad.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id_actividad" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id_actividad" id="id_actividad" value="{{ old('id_actividad', $nuevoIdActividad) }}" readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre_actividad" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre_actividad" id="nombre_actividad" value="{{ old('nombre_actividad') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="descrip_actividad" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descrip_actividad" id="descrip_actividad" rows="3" required>{{ old('descrip_actividad') }}</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de listado de actividades -->
        <div class="p-5 table-responsive">
            <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalCrear">
                <i class="fa-solid fa-circle-plus"></i>
                Agregar nuevo
            </button>
            <br><br>

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

            <!-- Tabla de actividades -->
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-white encabezadoTabla">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($actividades as $actividad)
                    <tr>
                        <td>{{ $actividad->id_actividad }}</td>
                        <td width="300">{{ $actividad->nombre_actividad }}</td>
                        <td width="500">{{ $actividad->descrip_actividad }}</td>
                        <td>
                            <!-- Botón para abrir modal de edición -->
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar-{{ $actividad->id_actividad }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <!-- Formulario para eliminar actividad -->
                            <form action="{{ route('actividad.destroy', $actividad->id_actividad) }}" method="POST" id="delete-form-{{ $actividad->id_actividad }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDeleteC({{ $actividad->id_actividad }})">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Editar Actividad -->
                    <div class="modal fade" id="modalEditar-{{ $actividad->id_actividad }}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditarLabel">Editar Actividad</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulario para editar actividad -->
                                    <form action="{{ route('actividad.update', $actividad->id_actividad) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="id_actividad" class="form-label">ID</label>
                                            <input type="text" class="form-control" name="id_actividad" id="id_actividad" value="{{ $actividad->id_actividad }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre_actividad" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre_actividad" id="nombre_actividad" value="{{ $actividad->nombre_actividad }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="descrip_actividad" class="form-label">Descripción</label>
                                            <textarea class="form-control" name="descrip_actividad" id="descrip_actividad" rows="3" required>{{ $actividad->descrip_actividad }}</textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
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
                {{ $actividades->links() }}
            </div>
        </div>
    </div>
</main>
</body>
</html>

@endsection
