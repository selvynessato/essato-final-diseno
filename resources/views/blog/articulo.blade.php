@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Otros scripts y estilos -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
        <script src="{{ asset('js/mensaje-eliminar.js') }}"></script>
    <link href="{{ asset('css/blog/blognew.css') }}" rel="stylesheet">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="id_blog" class="form-label">ID</label>
                                        <input type="text" class="form-control" name="id_blog" id="id_blog" value="{{ $nuevoIdBlog }}" readonly required>
                                    </div>                                   
                                </div>
                                <div class="col-md-6">                                
                                    <div class="mb-3">
                                        <label for="nombre_blog" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre_blog" id="nombre_blog" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="fechaPublic_blog" class="form-label">Fecha de Publicación</label>
                                        <input type="date" class="form-control" name="fechaPublic_blog" id="fechaPublic_blog" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="img_blog" class="form-label">Imagen</label>
                                        <input type="file" class="form-control" name="img_blog" id="img_blog" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="slug_blog" class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug_blog" id="slug_blog" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="recursos" class="form-label">Palabras claves</label>
                                        <input type="text" class="form-control" name="recursos" id="recursos" required>
                                    </div>
                                </div>
                                <div class="col-md-4">                                
                                    <div class="mb-3">
                                        <label for="id_usuario" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" name="id_usuario" id="id_usuario">
                                    </div>
                                </div>
                                <div class="col-md-4">                                
                                    <div class="mb-3">
                                        <label for="id_categoria" class="form-label">Categoría</label>
                                        <select class="form-control" name="id_categoria" id="id_categoria" required>
                                            @foreach($categorias as $categoria)
                                                <option value="{{ $categoria->id_categoria }}">{{ $categoria->nombre_categoria }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="contenido_blog" class="form-label">Contenido</label>
                                <textarea class="form-control editor" name="contenido_blog" id="contenido_blog" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion_blog" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descripcion_blog" id="descripcion_blog" rows="3" required></textarea>
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
                            <form id="delete-form-{{ $blog->id_blog }}" action="{{ route('blogs.destroy', $blog->id_blog) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $blog->id_blog }})">
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="id_blog" class="form-label">ID</label>
                                                    <input type="text" class="form-control" name="id_blog" id="id_blog" value="{{ $blog->id_blog }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="nombre_blog" class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" name="nombre_blog" id="nombre_blog" value="{{ $blog->nombre_blog }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="fechaPublic_blog" class="form-label">Fecha de Publicación</label>
                                                    <input type="date" class="form-control" name="fechaPublic_blog" id="fechaPublic_blog" value="{{ $blog->fechaPublic_blog }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="img_blog" class="form-label">Imagen</label>
                                                    <input type="text" class="form-control" name="img_blog" id="img_blog" value="{{ $blog->img_blog }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="slug_blog" class="form-label">Slug</label>
                                                    <input type="text" class="form-control" name="slug_blog" id="slug_blog" value="{{ $blog->slug_blog }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="recursos" class="form-label">Palabras claves</label>
                                                    <input type="text" class="form-control" name="recursos" id="recursos" value="{{ $blog->recursos }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="id_usuario" class="form-label">Usuario</label>
                                                    <input type="text" class="form-control" name="id_usuario" id="id_usuario" value="{{ $blog->id_usuario }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="id_categoria" class="form-label">Categoría</label>
                                                    <select class="form-control" name="id_categoria" id="id_categoria" required>
                                                        @foreach($categorias as $categoria)
                                                            <option value="{{ $categoria->id_categoria }}" @if($categoria->id_categoria == $blog->id_categoria) selected @endif>
                                                                {{ $categoria->nombre_categoria }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="contenido_blog" class="form-label">Contenido</label>
                                            <textarea class="form-control editor" name="contenido_blog" id="contenido_blog" rows="3" required>{{ $blog->contenido_blog }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="descripcion_blog" class="form-label">Descripción</label>
                                            <textarea class="form-control" name="descripcion_blog" id="descripcion_blog" rows="3" required>{{ $blog->descripcion_blog }}</textarea>
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
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.editor').forEach(function(editorElement) {
            ClassicEditor
                .create(editorElement, {
                    ckfinder: {
                        uploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}"
                    },
                    mediaEmbed: {
                        previewsInData: true,
                        providers: [
                            {
                                name: 'YouTube',
                                url: /^https?:\/\/(?:www\.)?youtube\.com\/watch\?v=(.+)$/,
                                html: match => {
                                    return `
                                        <div style="position: relative; width: 100%; height: 350px; overflow: hidden; max-width: 100%;">
                                            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/${match[1]}" allowfullscreen></iframe>
                                            <p style="text-align: center; margin-top: 10px;">Tu texto descriptivo aquí</p>
                                        </div>`;                                }
                            },
                            {
                                name: 'Vimeo',
                                url: /^https?:\/\/(?:www\.)?vimeo\.com\/(\d+)$/,
                                html: match => {
                                    return `<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;"><iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://player.vimeo.com/video/${match[1]}" allowfullscreen></iframe></div>`;
                                }
                            }
                        ]
                    }
                })
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        });
    });
</script>
</body>
</html>
@endsection