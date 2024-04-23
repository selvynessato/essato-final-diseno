<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog; 
use App\Models\Pais; 
use App\Models\Departamento; 
use App\Models\Encontraressato;


class WelcomeController extends Controller
{
    public function welcome()
    {
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $blogsAleatorios = Blog::inRandomOrder()->limit(3)->get();
        $encontraressatos = Encontraressato::all();

        return view('welcome')->with([
            'paises' => $paises,
            'departamentos' => $departamentos,
            'blogsAleatorios' => $blogsAleatorios,
            'encontraressatos' => $encontraressatos
        ]);
    }

    
    public function obtenerDepartamentosPorPais(Request $request)
    {
        $idPais = $request->input('idPais');

        // Consulta para obtener los departamentos por ID de país
        $departamentos = Departamento::where('id_pais', $idPais)->get();

        return response()->json($departamentos);
    }
}