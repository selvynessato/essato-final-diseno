@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5 table-responsive">
        <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalCrear" class="btn btn-outline-warning btn-sm">
            <i class="fa-solid fa-circle-plus"></i>
            Agragar nuevo
        </button>
        <br>
        <br>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-primary text-white">
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
                    <td>{{$departamento->id_departamento}}</td>
                    <td>{{$departamento->nombre_departamento}}</td>
                    <td>{{$departamento->pais->nombre_pais}}</td>
                    <td>
                        <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>  
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <select class="form-select" id="paisSelect">
                                    <option value="">Seleccionar país</option>
                                    @foreach($paises as $pais)
                                        <option value="{{ $pais->id_pais }}">{{ $pais->nombre_pais }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Departamento</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="codigo" pattern="\d*" title="Solo se permiten números" required>
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
@endsection