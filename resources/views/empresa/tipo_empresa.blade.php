@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Empresa</title>
    <!-- Otros scripts y estilos -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/mensaje-eliminar.js') }}"></script>
</head>
<body>
<main>
    <div class="container">
        <!-- Modal Crear Tipo de Empresa -->
        <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCrearLabel">Agregar Tipo de Empresa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario para crear nuevo tipo de empresa -->
                        <form action="{{ route('tipo_empresa.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id_tipoEmpresa" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id_tipoEmpresa" id="id_tipoEmpresa" value="{{ old('id_tipoEmpresa', $nuevoIdTipoEmpresa) }}" readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="clase_tipoEmpresa" class="form-label">Clase</label>
                                <input type="text" class="form-control" name="clase_tipoEmpresa" id="clase_tipoEmpresa" value="{{ old('clase_tipoEmpresa') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="descrip_tipoEmpresa" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descrip_tipoEmpresa" id="descrip_tipoEmpresa" rows="3" required>{{ old('descrip_tipoEmpresa') }}</textarea>
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

        <!-- Tabla de listado de tipos de empresa -->
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

            <!-- Tabla de tipos de empresa -->
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-white encabezadoTabla">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Clase</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($tiposEmpresa as $tipoEmpresa)
                    <tr>
                        <td>{{ $tipoEmpresa->id_tipoEmpresa }}</td>
                        <td>{{ $tipoEmpresa->clase_tipoEmpresa }}</td>
                        <td>{{ $tipoEmpresa->descrip_tipoEmpresa }}</td>
                        <td>
                            <!-- Botón para abrir modal de edición -->
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar-{{ $tipoEmpresa->id_tipoEmpresa }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <!-- Formulario para eliminar tipo de empresa -->
                            <form action="{{ route('tipo_empresa.destroy', $tipoEmpresa->id_tipoEmpresa) }}" method="POST" id="delete-form-{{ $tipoEmpresa->id_tipoEmpresa }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDeleteC({{ $tipoEmpresa->id_tipoEmpresa }})">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Editar Tipo de Empresa -->
                    <div class="modal fade" id="modalEditar-{{ $tipoEmpresa->id_tipoEmpresa }}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditarLabel">Editar Tipo de Empresa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulario para editar tipo de empresa -->
                                    <form action="{{ route('tipo_empresa.update', $tipoEmpresa->id_tipoEmpresa) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="id_tipoEmpresa" class="form-label">ID</label>
                                            <input type="text" class="form-control" name="id_tipoEmpresa" id="id_tipoEmpresa" value="{{ $tipoEmpresa->id_tipoEmpresa }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="clase_tipoEmpresa" class="form-label">Clase</label>
                                            <input type="text" class="form-control" name="clase_tipoEmpresa" id="clase_tipoEmpresa" value="{{ $tipoEmpresa->clase_tipoEmpresa }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="descrip_tipoEmpresa" class="form-label">Descripción</label>
                                            <textarea class="form-control" name="descrip_tipoEmpresa" id="descrip_tipoEmpresa" rows="3" required>{{ $tipoEmpresa->descrip_tipoEmpresa }}</textarea>
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
                {{ $tiposEmpresa->links() }}
            </div>
        </div>
    </div>
</main>
</body>
</html>

@endsection