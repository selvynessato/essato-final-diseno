<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pais; 
use App\Models\Departamento; 

class PaisController extends Controller
{
    public function indexPais()
    {
        $paises = Pais::all();
        return $paises;
    }   
}