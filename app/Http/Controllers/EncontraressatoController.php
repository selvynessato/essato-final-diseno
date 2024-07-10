<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Encontraressato;

class EncontraressatoController extends Controller
{
    public function index()
    {
        Paginator::useBootstrapFour();
        
        $encontraressatos = Encontraressato::paginate(10);
        $ultimoEncontraressato = Encontraressato::orderBy('id_encontraressato', 'desc')->first();
        $nuevoIdEncontraressato = $ultimoEncontraressato ? $ultimoEncontraressato->id_encontraressato + 1 : 1;
    
        return view('contacto.encontraste', compact('encontraressatos', 'nuevoIdEncontraressato'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_encontraressato' => 'required|integer|unique:encontraressato,id_encontraressato',
            'nombre_encontraressato' => 'required|string|max:50',
            'descripcion_encontraressato' => 'required|string|max:255',
        ]);
    
        Encontraressato::create([
            'id_encontraressato' => $request->id_encontraressato,
            'nombre_encontraressato' => $request->nombre_encontraressato,
            'descripcion_encontraressato' => $request->descripcion_encontraressato,
        ]);
    
        return redirect()->back()->with('creacion-exitosa', 'Encontraressato creado correctamente');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_encontraressato' => 'required|string|max:50',
            'descripcion_encontraressato' => 'required|string|max:255',
        ]);

        $encontraressato = Encontraressato::findOrFail($id);
        $encontraressato->nombre_encontraressato = $request->nombre_encontraressato;
        $encontraressato->descripcion_encontraressato = $request->descripcion_encontraressato;
        $encontraressato->save();

        return redirect()->back()->with('actualizacion-exitosa', 'Encontraressato actualizado correctamente');
    }

    public function destroy($id)
    {
        $encontraressato = Encontraressato::findOrFail($id);
        $encontraressato->delete();

        return redirect()->back()->with('eliminacion-exitosa', 'Encontraressato eliminado correctamente');
    }
}
