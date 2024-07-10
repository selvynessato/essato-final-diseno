@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontraressato</title>
    <!-- Otros scripts y estilos -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/mensaje-eliminar.js') }}"></script>
</head>
<body>
<main>
    <div class="container">
        <!-- Modal Crear Encontraressato -->
        <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCrearLabel">Agregar Encontraressato</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario para crear nuevo Encontraressato -->
                        <form action="{{ route('encontraressato.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id_encontraressato" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id_encontraressato" id="id_encontraressato" value="{{ old('id_encontraressato', $nuevoIdEncontraressato) }}" readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre_encontraressato" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre_encontraressato" id="nombre_encontraressato" value="{{ old('nombre_encontraressato') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion_encontraressato" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descripcion_encontraressato" id="descripcion_encontraressato" rows="3" required>{{ old('descripcion_encontraressato') }}</textarea>
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

        <!-- Tabla de listado de Encontraressato -->
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

            <!-- Tabla de Encontraressato -->
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
                    @foreach($encontraressatos as $encontraressato)
                    <tr>
                        <td>{{ $encontraressato->id_encontraressato }}</td>
                        <td width="300">{{ $encontraressato->nombre_encontraressato }}</td>
                        <td width="500">{{ $encontraressato->descripcion_encontraressato }}</td>
                        <td>
                            <!-- Botón para abrir modal de edición -->
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar-{{ $encontraressato->id_encontraressato }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <!-- Formulario para eliminar Encontraressato -->
                            <form action="{{ route('encontraressato.destroy', $encontraressato->id_encontraressato) }}" method="POST" id="delete-form-{{ $encontraressato->id_encontraressato }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDeleteC({{ $encontraressato->id_encontraressato }})">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Editar Encontraressato -->
                    <div class="modal fade" id="modalEditar-{{ $encontraressato->id_encontraressato }}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditarLabel">Editar Encontraressato</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulario para editar Encontraressato -->
                                    <form action="{{ route('encontraressato.update', $encontraressato->id_encontraressato) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="id_encontraressato" class="form-label">ID</label>
                                            <input type="text" class="form-control" name="id_encontraressato" id="id_encontraressato" value="{{ $encontraressato->id_encontraressato }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre_encontraressato" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre_encontraressato" id="nombre_encontraressato" value="{{ $encontraressato->nombre_encontraressato }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="descripcion_encontraressato" class="form-label">Descripción</label>
                                            <textarea class="form-control" name="descripcion_encontraressato" id="descripcion_encontraressato" rows="3" required>{{ $encontraressato->descripcion_encontraressato }}</textarea>
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
                {{ $encontraressatos->links() }}
            </div>
        </div>
    </div>
</main>
</body>
</html>

@endsection