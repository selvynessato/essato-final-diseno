<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\TipoEmpresa; 

class Tipo_EmpresaController extends Controller
{


    public function index()
    {
        Paginator::useBootstrapFour();
        
        $tiposEmpresa = TipoEmpresa::paginate(10);
        $ultimoTipoEmpresa = TipoEmpresa::orderBy('id_tipoEmpresa', 'desc')->first();
        $nuevoIdTipoEmpresa = $ultimoTipoEmpresa ? $ultimoTipoEmpresa->id_tipoEmpresa + 1 : 1;
    
        return view('empresa.tipo_empresa', compact('tiposEmpresa', 'nuevoIdTipoEmpresa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_tipoEmpresa' => 'required|integer|unique:tipo_empresa,id_tipoEmpresa',
            'clase_tipoEmpresa' => 'required|string|max:255',
            'descrip_tipoEmpresa' => 'required|string|max:255',
        ]);
    
        TipoEmpresa::create([
            'id_tipoEmpresa' => $request->id_tipoEmpresa,
            'clase_tipoEmpresa' => $request->clase_tipoEmpresa,
            'descrip_tipoEmpresa' => $request->descrip_tipoEmpresa,
        ]);
    
        return redirect()->back()->with('creacion-exitosa', 'Tipo de empresa creado correctamente');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'clase_tipoEmpresa' => 'required',
            'descrip_tipoEmpresa' => 'required',
        ]);

        $tipoEmpresa = TipoEmpresa::findOrFail($id);
        $tipoEmpresa->clase_tipoEmpresa = $request->clase_tipoEmpresa;
        $tipoEmpresa->descrip_tipoEmpresa = $request->descrip_tipoEmpresa;
        $tipoEmpresa->save();

        return redirect()->back()->with('actualizacion-exitosa', 'Tipo de empresa actualizado correctamente');
    }

    public function destroy($id)
    {
        $tipoEmpresa = TipoEmpresa::findOrFail($id);
        $tipoEmpresa->delete();

        return redirect()->back()->with('eliminacion-exitosa', 'Tipo de empresa eliminado correctamente');
    }
}
