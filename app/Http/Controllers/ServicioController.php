<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PreguntaFrecuente; 
use App\Models\Blog;

class ServicioController extends Controller
{
    public function index()
    {
        $blogsAleatorios = Blog::inRandomOrder()->limit(3)->get();
        $preguntasFrecuentes = PreguntaFrecuente::all();
        return view('servicios.marketing')->with([
            'blogsAleatorios' => $blogsAleatorios,
            'preguntasFrecuentes' => $preguntasFrecuentes
        ]);
    }
}
