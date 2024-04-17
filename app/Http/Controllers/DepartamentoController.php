<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Departamento; 


class DepartamentoController extends Controller
{
    public function indexDepartamento()
    {
        $departamentos = Departamento::all();
        return $departamentos;
    }

    public function obtenerDepartamentos(Request $request)
    {
        $paisId = $request->input('pais_id');
        $departamentos = Departamento::where('pais_id', $paisId)->get();
        return response()->json($departamentos);
    }
}
