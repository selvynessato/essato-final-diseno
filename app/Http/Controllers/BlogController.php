<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\blog; 
use App\Models\pais;




class BlogController extends Controller
{
    public function index()
    {
        Paginator::useBootstrapFour();

        $blogs = Blog::paginate(9); 
        return view('blog.blog', ['blogs' => $blogs]);
    }

    public function welcome()
    {
        $blogsAleatorios = Blog::inRandomOrder()->limit(3)->get();
        return view('welcome', ['blogsAleatorios' => $blogsAleatorios]);
    }
  
    public function detalleblog(Blog $blog)
    {
        return view('blog.detalle', ['blog' => $blog]);
    }
}