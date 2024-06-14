<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Categoria;

class BlogcreateController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();

        $categorias = Categoria::paginate(10);
        $ultimaCategoria = Categoria::orderBy('id_categoria', 'desc')->first();
        $nuevoIdCategoria = $ultimaCategoria ? $ultimaCategoria->id_categoria + 1 : 1;

        return view('blog.categoria', compact('categorias', 'nuevoIdCategoria'));
    }

    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
        
            'nombre_categoria' => 'required',
            'descrip_categoria' => 'required',
        ]);

        // Obtener el último ID de categoría
        $ultimaCategoria = Categoria::orderBy('id_categoria', 'desc')->first();

        // Calcular el nuevo ID
        $nuevoIdCategoria = $ultimaCategoria ? $ultimaCategoria->id_categoria + 1 : 1;

        // Crear una nueva categoría
        Categoria::create([
            'id_categoria' => $nuevoIdCategoria,
            'nombre_categoria' => $request->input('nombre_categoria'),
            'descrip_categoria' => $request->input('descrip_categoria'),
        ]);

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('creacion-exitosa', 'Categoría creada correctamente');
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'nombre_categoria' => 'required',
            'descrip_categoria' => 'required',
        ]);

        // Buscar la categoría por ID
        $categoria = Categoria::findOrFail($id);

        // Actualizar los campos de la categoría
        $categoria->nombre_categoria = $request->input('nombre_categoria');
        $categoria->descrip_categoria = $request->input('descrip_categoria');

        // Guardar los cambios
        $categoria->save();

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('actualizacion-exitosa', 'Categoría actualizada correctamente');
    }

    public function destroy($id)
    {
        // Buscar la categoría por ID y eliminarla
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('eliminacion-exitosa', 'Categoría eliminada correctamente');
    }
}
