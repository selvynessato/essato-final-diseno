<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Departamento; 


class DepartamentoController extends Controller
{
    public function listado_depto(Request $request, $id_pais = null)
    {
        $paises = Pais::all();
        $departamentos = Departamento::all(); // Obtener todos los departamentos
        return view('welcome', compact('paises', 'departamentos'));
    }
}
