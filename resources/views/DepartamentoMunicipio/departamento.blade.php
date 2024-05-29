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
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($departamentos as $departamento)
                <tr>
                    <th>{{$departamento->id_departamento}}</th>
                    <td>{{$departamento->nombre_departamento}}</td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalEdicion{{$departamento->id_departamento}}" class="btn btn-outline-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-outline-danger btn-sm delete-departamento" data-id="{{ $departamento->id_departamento }}">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>  
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $departamentos->links() }}
        </div>
    </div> 
</div>
@endsection