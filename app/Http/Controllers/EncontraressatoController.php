<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encontraressato;

class EncontraressatoController extends Controller
{
    public function indexEncontrar()
    {
        $encontraressatos = Encontraressato::all();
        return $encontraressatos;
    }
}
