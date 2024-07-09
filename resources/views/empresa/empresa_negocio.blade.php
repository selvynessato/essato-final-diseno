@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <!-- Otros scripts y estilos -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/mensaje-eliminar.js') }}"></script>
</head>
<body>
<main>
<div class="container-fluid">
    <!-- Modal Crear Empresa -->
    <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCrearLabel">Agregar Empresa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para crear nueva empresa -->
                    <form action="{{ route('empresa.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nombre_empresa" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="img_empresa" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" name="img_empresa" id="img_empresa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="estado_empresa" class="form-label">Estado</label>
                                    <input type="text" class="form-control" name="estado_empresa" id="estado_empresa" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fechainicio_empresa" class="form-label">Fecha de Inicio</label>
                                    <input type="date" class="form-control" name="fechainicio_empresa" id="fechainicio_empresa" required>
                                </div>
                                <div class="mb-3">
                                    <label for="id_tipoEmpresa" class="form-label">Tipo de Empresa</label>
                                    <select class="form-control" name="id_tipoEmpresa" id="id_tipoEmpresa" required>
                                        @foreach($tiposEmpresa as $tipoEmpresa)
                                            <option value="{{ $tipoEmpresa->id_tipoEmpresa }}">{{ $tipoEmpresa->clase_tipoEmpresa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="id_actividad" class="form-label">Actividad</label>
                                    <select class="form-control" name="id_actividad" id="id_actividad" required>
                                        @foreach($actividades as $actividad)
                                            <option value="{{ $actividad->id_actividad }}">{{ $actividad->nombre_actividad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
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

    <!-- Tabla de listado de empresas -->
    <div class="p-5 table-responsive">
        <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalCrear">
            <i class="fa-solid fa-circle-plus"></i>
            Agregar nueva empresa
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

        <!-- Tabla de empresas -->
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark text-white encabezadoTabla">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de Inicio</th>
                    <th scope="col">Tipo de Empresa</th>
                    <th scope="col">Actividad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->id_empresa }}</td>
                    <td width="200">{{ $empresa->nombre_empresa }}</td>
                    <td width="150">
                        <img src="{{ asset($empresa->img_empresa) }}" class="card-img-top hover-img" alt="Empresa imagen" width="100%" height="100px">
                    </td>
                    <td>{{ $empresa->estado_empresa ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $empresa->fechainicio_empresa }}</td>
                    <td>{{ $empresa->tipoEmpresa->clase_tipoEmpresa }}</td>
                    <td width="200">{{ $empresa->actividad->nombre_actividad }}</td>
                    <td>
                        <!-- Botón para abrir modal de edición -->
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar-{{ $empresa->id_empresa }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <!-- Formulario para eliminar empresa -->
                        <form id="delete-form-{{ $empresa->id_empresa }}" action="{{ route('empresa.destroy', $empresa->id_empresa) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $empresa->id_empresa }})">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Modal Editar Empresa -->
                <div class="modal fade" id="modalEditar-{{ $empresa->id_empresa }}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEditarLabel">Editar Empresa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulario para editar empresa -->
                                <form action="{{ route('empresa.update', $empresa->id_empresa) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="nombre_empresa" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" value="{{ $empresa->nombre_empresa }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="img_empresa_actual" class="form-label">Imagen Actual</label>
                                                <input type="file" class="form-control" name="img_empresa_nueva" id="img_empresa_nueva">
                                                <input type="text" class="form-control" name="img_empresa_actual" id="img_empresa_actual" value="{{ $empresa->img_empresa }}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="estado_empresa" class="form-label">Estado</label>
                                                <input type="text" class="form-control" name="estado_empresa" id="estado_empresa" value="{{ $empresa->estado_empresa }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="fechainicio_empresa" class="form-label">Fecha de Inicio</label>
                                                <input type="date" class="form-control" name="fechainicio_empresa" id="fechainicio_empresa" value="{{ $empresa->fechainicio_empresa }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="id_tipoEmpresa" class="form-label">Tipo de Empresa</label>
                                                <select class="form-control" name="id_tipoEmpresa" id="id_tipoEmpresa" required>
                                                    @foreach($tiposEmpresa as $tipoEmpresa)
                                                        <option value="{{ $tipoEmpresa->id_tipoEmpresa }}" {{ $empresa->id_tipoEmpresa == $tipoEmpresa->id_tipoEmpresa ? 'selected' : '' }}>{{ $tipoEmpresa->clase_tipoEmpresa }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="id_actividad" class="form-label">Actividad</label>
                                                <select class="form-control" name="id_actividad" id="id_actividad" required>
                                                    @foreach($actividades as $actividad)
                                                        <option value="{{ $actividad->id_actividad }}" {{ $empresa->id_actividad == $actividad->id_actividad ? 'selected' : '' }}>{{ $actividad->nombre_actividad }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
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
            {{ $empresas->links() }}
        </div>
    </div>
</div>
</main>
</body>
</html>

@endsection