<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Categoria;
use App\Models\Blog;

class BlognewController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();

        $blogs = Blog::paginate(10);
        $ultimoBlog = Blog::orderBy('id_blog', 'desc')->first();
        $nuevoIdBlog = $ultimoBlog ? $ultimoBlog->id_blog + 1 : 1;
        $categorias = Categoria::all(); // Obtener todas las categorías

        return view('blog.articulo', compact('blogs', 'nuevoIdBlog', 'categorias'));

    }

    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'id_blog' => 'required|unique:blog,id_blog',
            'nombre_blog' => 'required',
            'contenido_blog' => 'required',
            'descripcion_blog' => 'required',
            'fechaPublic_blog' => 'required|date',
            'img_blog' => 'required',
            'slug_blog' => 'required',
            'recursos' => 'required|string',
            'id_usuario' => 'nullable|integer',
            'id_categoria' => 'required|integer',
        ]);

        // Crear un nuevo blog
        Blog::create([
            'id_blog' => $request->input('id_blog'),
            'nombre_blog' => $request->input('nombre_blog'),
            'contenido_blog' => $request->input('contenido_blog'),
            'descripcion_blog' => $request->input('descripcion_blog'),
            'fechaPublic_blog' => $request->input('fechaPublic_blog'),
            'img_blog' => $request->input('img_blog'),
            'slug_blog' => $request->input('slug_blog'),
            'recursos' => $request->input('recursos'),
            'id_usuario' => $request->input('id_usuario'),
            'id_categoria' => $request->input('id_categoria'),
        ]);

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('creacion-exitosa', 'Blog creado correctamente');
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'nombre_blog' => 'required',
            'contenido_blog' => 'required',
            'descripcion_blog' => 'required',
            'fechaPublic_blog' => 'required|date',
            'img_blog' => 'required',
            'slug_blog' => 'required',
            'recursos' => 'required|string',
            'id_usuario' => 'nullable|integer',
            'id_categoria' => 'required|integer',
        ]);

        // Buscar el blog por ID
        $blog = Blog::findOrFail($id);

        // Actualizar los campos del blog
        $blog->nombre_blog = $request->input('nombre_blog');
        $blog->contenido_blog = $request->input('contenido_blog');
        $blog->descripcion_blog = $request->input('descripcion_blog');
        $blog->fechaPublic_blog = $request->input('fechaPublic_blog');
        $blog->img_blog = $request->input('img_blog');
        $blog->slug_blog = $request->input('slug_blog');
        $blog->recursos = $request->input('recursos');
        $blog->id_usuario = $request->input('id_usuario');
        $blog->id_categoria = $request->input('id_categoria');

        // Guardar los cambios
        $blog->save();

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('actualizacion-exitosa', 'Blog actualizado correctamente');
    }

    public function destroy($id)
    {
        // Buscar el blog por ID y eliminarlo
        $blog = Blog::findOrFail($id);
        $blog->delete();

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('eliminacion-exitosa', 'Blog eliminado correctamente');
    }
}
