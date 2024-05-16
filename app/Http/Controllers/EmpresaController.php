<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa; 
use App\Models\Blog; 

class EmpresaController extends Controller
{
    public function index()
    {
        $blogsAleatorios = Blog::inRandomOrder()->limit(3)->get();
        $empresas = Empresa::all();
        return view('empresa.empresa')->with([
            'blogsAleatorios' => $blogsAleatorios,
            'empresas' => $empresas
        ]);
    }
}
