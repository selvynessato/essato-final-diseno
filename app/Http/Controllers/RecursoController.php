<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursoController extends Controller
{
    public function index()
    {
        $recursos = Recurso::all();          
        return view('recurso.recurso', ['recursos' => $recursos]);
    }

    public function detalleblog(Recurso $recurso)
    {
        return view('recurso.recursodetalle', ['recurso' => $recurso]);
    }
}
