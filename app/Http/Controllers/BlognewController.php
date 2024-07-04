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
            'nombre_blog' => 'required|string|max:255',
            'contenido_blog' => 'required|string',
            'descripcion_blog' => 'required|string',
            'fechaPublic_blog' => 'required|date',
            'img_blog' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug_blog' => 'required|string|max:255',
            'recursos' => 'required|string|max:255',
            'id_usuario' => 'nullable|integer',
            'id_categoria' => 'required|integer|exists:categoria,id_categoria',
        ]);
    
        // Manejar la subida de la imagen
        if ($request->hasFile('img_blog')) {
            $image = $request->file('img_blog');
            $name = $image->getClientOriginalName(); // Usar el nombre original de la imagen
            $destinationPath = public_path('/images/blog');
            $image->move($destinationPath, $name);
            $imgUrl = 'images/blog/' . $name;
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
        $request->validate([
            'nombre_blog' => 'required|string|max:255',
            'fechaPublic_blog' => 'required|date',
            'slug_blog' => 'required|string|max:255',
            'recursos' => 'required|string|max:255',
            'id_usuario' => 'nullable|string|max:255',
            'id_categoria' => 'required|integer|exists:categoria,id_categoria',
            'contenido_blog' => 'required|string',
            'descripcion_blog' => 'required|string',
            'img_blog_nueva' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Obtener el blog existente
        $blog = Blog::findOrFail($id);
    
        // Actualizar los campos
        $blog->nombre_blog = $request->nombre_blog;
        $blog->fechaPublic_blog = $request->fechaPublic_blog;
        $blog->slug_blog = $request->slug_blog;
        $blog->recursos = $request->recursos;
        $blog->id_usuario = $request->id_usuario;
        $blog->id_categoria = $request->id_categoria;
        $blog->contenido_blog = $request->contenido_blog;
        $blog->descripcion_blog = $request->descripcion_blog;
    
        if ($request->hasFile('img_blog_nueva')) {
            $imagenNueva = $request->file('img_blog_nueva');
            $nombreOriginal = $imagenNueva->getClientOriginalName();
            $imagenNueva->move(public_path('images/blog/'), $nombreOriginal);
        
            if ($blog->img_blog && file_exists(public_path($blog->img_blog)) && $blog->img_blog != 'images/blog/' . $nombreOriginal) {
                unlink(public_path($blog->img_blog));
            }   
            $blog->img_blog = 'images/blog/' . $nombreOriginal;
        }
    
        $blog->save();
        return redirect()->back()->with('actualizacion-exitosa', 'Blog actualizado correctamente');
    }
    
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

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