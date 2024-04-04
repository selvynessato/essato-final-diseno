<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais; 

class PaisController extends Controller
{
    public function litado_pais()
    {
        $paises = Pais::all();
        return view('welcome')->with("paises", $paises);
    } 
}