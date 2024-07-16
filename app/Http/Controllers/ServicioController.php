<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PreguntaFrecuente; 

class ServicioController extends Controller
{
    public function index()
    {
        $preguntasFrecuentes = PreguntaFrecuente::all();
        return view('servicios.marketing', compact('preguntasFrecuentes'));
    }
}
