@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Otros scripts y estilos -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/mensaje-eliminar.js') }}"></script>
</head>
<body>
<main>
    <div class="container">
        <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCrearLabel">Agregar Departamento/Provincia</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('crear-departamento') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="pais" class="form-label">País</label>
                                <select class="form-select" id="pais" name="cboDepartamentoP" required>
                                    <option value="" disabled selected>Seleccione un país</option>
                                    @foreach ($paises as $pais)
                                        <option value="{{ $pais->id_pais }}">{{ $pais->nombre_pais }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="departamento" class="form-label">Departamento</label>
                                <input type="text" class="form-control" name="txtDepartamentoN" id="departamento" required>
                            </div>
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txtDepartamentoC" id="codigo" pattern="\d*" title="Solo se permiten números" required>
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

        <div class="p-5 table-responsive">

            <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalCrear">
                <i class="fa-solid fa-circle-plus"></i>
                Agregar nuevo
            </button>
            <br><br>
            @if(session('creacion-exitosa'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('creacion-exitosa') }} 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('actualizado-exitosa'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('actualizado-exitosa') }} 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('eliminacion-exitosa'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('eliminacion-exitosa') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-white encabezadoTabla">
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($departamentos as $departamento)
                    <tr>
                        <td>{{ $departamento->id_departamento }}</td>
                        <td>{{ $departamento->nombre_departamento }}</td>
                        <td>{{ $departamento->pais->nombre_pais }}</td>
                        <td>
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar-{{ $departamento->id_departamento }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('eliminar-departamento', $departamento->id_departamento) }}" method="POST" style="display:inline;" id="delete-form-{{ $departamento->id_departamento }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $departamento->id_departamento }})">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <!-- Modal Editar Departamento-->
                    <div class="modal fade" id="modalEditar-{{ $departamento->id_departamento }}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditarLabel">Editar Departamento/Provincia</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('actualizar-departamento', $departamento->id_departamento) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="pais" class="form-label">País</label>
                                            <select class="form-select" id="pais-{{ $departamento->id_departamento }}" name="cboDepartamentoP" required>
                                                <option value="" disabled selected>Seleccione un país</option>
                                                @foreach ($paises as $pais)
                                                    <option value="{{ $pais->id_pais }}" {{ $pais->id_pais == $departamento->id_pais ? 'selected' : '' }}>{{ $pais->nombre_pais }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="departamento" class="form-label">Departamento</label>
                                            <input type="text" class="form-control" name="txtDepartamentoN" id="departamento-{{ $departamento->id_departamento }}" value="{{ $departamento->nombre_departamento }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="codigo" class="form-label">Código</label>
                                            <input type="text" class="form-control" name="txtDepartamentoC" id="codigo-{{ $departamento->id_departamento }}" value="{{ $departamento->id_departamento }}" pattern="\d*" title="Solo se permiten números" required>
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
                {{ $departamentos->links() }}
            </div>
        </div> 
    </div>
</main>
</body>
</html>
@endsection