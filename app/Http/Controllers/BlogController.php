<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\blog; 
use App\Models\pais; 

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();          
        return view('blog.blog', ['blogs' => $blogs]);
    }

    public function listarPaises()
    {
        $paises = Pais::all();

        return view('welcome', [
            'paises' => $paises,
            'departamentos' => [] // Inicializamos el arreglo de departamentos para evitar errores
        ]);
    } 
}