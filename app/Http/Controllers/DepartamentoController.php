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

        $departamentos = Departamento::paginate(10);
        return view('DepartamentoMunicipio/departamento')->with("departamentos",$departamentos);
    }        
}