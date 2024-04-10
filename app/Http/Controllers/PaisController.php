<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pais; 
use App\Models\departamento; 

class PaisController extends Controller
{
    public function listarPaises()
    {
        $paises = Pais::all();
        return view('welcome', ['paises' => $paises]);
    } 
 

    public function listarDepartamento($id)
    {
        $pais = Pais::find($id);

        if ($pais) {
            $departamentos = Departamento::where('id_pais', $id)->get();

            return response()->json($departamentos);
        } else {
            return redirect()->route('pagina.error');
        }
    }
    
}