<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Actividad; 

class ActividadController extends Controller
{

    public function index()
    {
        Paginator::useBootstrapFour();
        
        $actividades = Actividad::paginate(10);
        $ultimaActividad = Actividad::orderBy('id_actividad', 'desc')->first();
        $nuevoIdActividad = $ultimaActividad ? $ultimaActividad->id_actividad + 1 : 1;
    
        return view('empresa.actividad', compact('actividades', 'nuevoIdActividad'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_actividad' => 'required|integer|unique:actividad,id_actividad',
            'nombre_actividad' => 'required|string|max:50',
            'descrip_actividad' => 'required|string|max:255',
        ]);
    
        Actividad::create([
            'id_actividad' => $request->id_actividad,
            'nombre_actividad' => $request->nombre_actividad,
            'descrip_actividad' => $request->descrip_actividad,
        ]);
    
        return redirect()->back()->with('creacion-exitosa', 'Actividad creada correctamente');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_actividad' => 'required|string|max:50',
            'descrip_actividad' => 'required|string|max:255',
        ]);

        $actividad = Actividad::findOrFail($id);
        $actividad->nombre_actividad = $request->nombre_actividad;
        $actividad->descrip_actividad = $request->descrip_actividad;
        $actividad->save();

        return redirect()->back()->with('actualizacion-exitosa', 'Actividad actualizada correctamente');
    }

    public function destroy($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();

        return redirect()->back()->with('eliminacion-exitosa', 'Actividad eliminada correctamente');
    }
}
