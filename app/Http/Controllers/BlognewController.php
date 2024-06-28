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
            'img_blog' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug_blog' => 'required',
            'recursos' => 'required|string',
            'id_usuario' => 'nullable|integer',
            'id_categoria' => 'required|integer',
        ]);

        // Manejar la subida de la imagen
        if ($request->hasFile('img_blog')) {
            $image = $request->file('img_blog');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/blog');
            $image->move($destinationPath, $name);
            $imgUrl = '/images/blog/' . $name;
        } else {
            return redirect()->back()->with('error-noexitoso', 'No se puede dejar el campo de imagen vacío.');
        }

        // Crear un nuevo blog
        Blog::create([
            'id_blog' => $request->input('id_blog'),
            'nombre_blog' => $request->input('nombre_blog'),
            'contenido_blog' => $request->input('contenido_blog'),
            'descripcion_blog' => $request->input('descripcion_blog'),
            'fechaPublic_blog' => $request->input('fechaPublic_blog'),
            'img_blog' => $imgUrl,
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
        'img_blog' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'slug_blog' => 'required',
        'recursos' => 'required|string',
        'id_usuario' => 'nullable|integer',
        'id_categoria' => 'required|integer',
    ]);

    // Buscar el blog por ID
    $blog = Blog::findOrFail($id);

    // Manejar la subida de la imagen si hay una nueva o mantener la existente
    if ($request->hasFile('img_blog')) {
        // Subir y mantener el nombre original de la imagen nueva
        $imagen = $request->file('img_blog');
        $nombreOriginal = $imagen->getClientOriginalName();
        $imagen->move(public_path('images/blog/'), $nombreOriginal);
        $blog->img_blog = 'images/blog/' . $nombreOriginal;

        // Eliminar la imagen anterior si existe y no es la misma que la nueva
        if ($blog->img_blog != $blog->img_blog_original && file_exists(public_path($blog->img_blog_original))) {
            unlink(public_path($blog->img_blog_original));
        }
    }

    // Actualizar los campos del blog
    $blog->nombre_blog = $request->input('nombre_blog');
    $blog->contenido_blog = $request->input('contenido_blog');
    $blog->descripcion_blog = $request->input('descripcion_blog');
    $blog->fechaPublic_blog = $request->input('fechaPublic_blog');
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

    public function upload(Request $request)
    {
        if($request->hasfile('upload')){
    
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName. '_' . time() . '.' . $extension;
    
            // Mueve el archivo a la ruta public/images/media/
            $request->file('upload')->move(public_path('images/media'), $fileName);
    
            $url = asset('images/media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }   
}