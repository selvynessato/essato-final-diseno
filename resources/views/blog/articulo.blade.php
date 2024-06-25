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
    <div class="container-fluid">
        <!-- Modal Crear Blog -->
        <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCrearLabel">Agregar Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario para crear nuevo blog -->
                        <form action="{{ route('blogs.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id_blog" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id_blog" id="id_blog" value="{{ $nuevoIdBlog }}" readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre_blog" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre_blog" id="nombre_blog" required>
                            </div>
                            <div class="mb-3">
                                <label for="contenido_blog" class="form-label">Contenido</label>
                                <textarea class="form-control" name="contenido_blog" id="contenido_blog" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion_blog" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descripcion_blog" id="descripcion_blog" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="fechaPublic_blog" class="form-label">Fecha de Publicación</label>
                                <input type="date" class="form-control" name="fechaPublic_blog" id="fechaPublic_blog" required>
                            </div>
                            <div class="mb-3">
                                <label for="img_blog" class="form-label">Imagen</label>
                                <input type="text" class="form-control" name="img_blog" id="img_blog" required>
                            </div>
                            <div class="mb-3">
                                <label for="slug_blog" class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug_blog" id="slug_blog" required>
                            </div>
                            <div class="mb-3">
                                <label for="recursos" class="form-label">Palabras claves</label>
                                <input type="text" class="form-control" name="recursos" id="recursos" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_usuario" class="form-label">ID Usuario</label>
                                <input type="text" class="form-control" name="id_usuario" id="id_usuario">
                            </div>
                            <div class="mb-3">
                                <label for="id_categoria" class="form-label">ID Categoría</label>
                                <input type="text" class="form-control" name="id_categoria" id="id_categoria" required>
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

        <!-- Tabla de listado de blogs -->
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

            <!-- Tabla de blogs -->
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-white encabezadoTabla">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Palabras Claves</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id_blog }}</td>
                        <td width="300">{{ $blog->nombre_blog }}</td>
                        <td width="200">
                            <img src="{{ asset($blog->img_blog) }}" class="card-img-top hover-img" alt="Blog imagen" width="100%" height="100px">
                        </td>
                        <td>{{ $blog->recursos }}</td>
                        <td>{{ $blog->id_usuario }}</td>
                        <td>{{ $blog->categoria->nombre_categoria }}</td>
                        <td>
                            <!-- Botón para abrir modal de edición -->
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar-{{ $blog->id_blog }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <!-- Formulario para eliminar blog -->
                            <form action="{{ route('blogs.destroy', $blog->id_blog) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="confirmDeleteC({{ $blog->id_blog }})">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Editar Blog -->
                    <div class="modal fade" id="modalEditar-{{ $blog->id_blog }}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditarLabel">Editar Blog</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulario para editar blog -->
                                    <form action="{{ route('blogs.update', $blog->id_blog) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="id_blog" class="form-label">ID</label>
                                            <input type="text" class="form-control" name="id_blog" id="id_blog" value="{{ $blog->id_blog }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre_blog" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre_blog" id="nombre_blog" value="{{ $blog->nombre_blog }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contenido_blog" class="form-label">Contenido</label>
                                            <textarea class="form-control" name="contenido_blog" id="contenido_blog" rows="3" required>{{ $blog->contenido_blog }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="descripcion_blog" class="form-label">Descripción</label>
                                            <textarea class="form-control" name="descripcion_blog" id="descripcion_blog" rows="3" required>{{ $blog->descripcion_blog }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="fechaPublic_blog" class="form-label">Fecha de Publicación</label>
                                            <input type="date" class="form-control" name="fechaPublic_blog" id="fechaPublic_blog" value="{{ $blog->fechaPublic_blog }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="img_blog" class="form-label">Imagen</label>
                                            <input type="text" class="form-control" name="img_blog" id="img_blog" value="{{ $blog->img_blog }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="slug_blog" class="form-label">Slug</label>
                                            <input type="text" class="form-control" name="slug_blog" id="slug_blog" value="{{ $blog->slug_blog }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recursos" class="form-label">Palabras claves</label>
                                            <input type="text" class="form-control" name="recursos" id="recursos" value="{{ $blog->recursos }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_usuario" class="form-label">ID Usuario</label>
                                            <input type="text" class="form-control" name="id_usuario" id="id_usuario" value="{{ $blog->id_usuario }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_categoria" class="form-label">ID Categoría</label>
                                            <input type="text" class="form-control" name="id_categoria" id="id_categoria" value="{{ $blog->id_categoria }}" required>
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
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</main>
<script>
function confirmDeleteC(id) {
  Swal.fire({
      title: "¿Desea eliminar archivo?",
      text: "No podrá revertir los cambios",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Eliminar"
  }).then((result) => {
      if (result.isConfirmed) {
          // El usuario ha hecho clic en "Eliminar", proceder con la eliminación
          document.getElementById('delete-form-' + id).submit();
      } else {
          // El usuario ha cancelado, no hacer nada
          return false;
      }
  });
}
</script>
</body>
</html>

@endsection

