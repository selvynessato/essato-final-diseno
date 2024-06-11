<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Pais;
use App\Models\Departamento; 


class DepartamentoController extends Controller
{
    public function departamento()
    {
        Paginator::useBootstrapFour();

        $departamentos = Departamento::with('pais')->paginate(10);
        $paises = Pais::all();
        
        return view('DepartamentoMunicipio.departamento', compact('departamentos', 'paises'));
    }        
}