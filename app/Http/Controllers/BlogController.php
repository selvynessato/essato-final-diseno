<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Blog; 
use App\Models\Pais;
use App\Models\Categoria;



class BlogController extends Controller
{
    public function index()
    {
        Paginator::useBootstrapFour();

        $blogs = Blog::paginate(9);
        $categorias = Categoria::all(); 

        return view('blog.blog', ['blogs' => $blogs, 'categorias' => $categorias]); 
    }
 
    public function detalleblog(Blog $blog)
    {
        return view('blog.detalle', ['blog' => $blog]);
    }

    public function filtrarBlogs(Request $request)
    {
        Paginator::useBootstrapFour();
        $idCategoria = $request->input('id_categoria');
        $blogs = Blog::where('id_categoria', $idCategoria)->paginate(9);
    
        $blogs->appends(['id_categoria' => $idCategoria]);
    
        $categorias = Categoria::all(); 
        
        return view('blog.blog', ['blogs' => $blogs, 'categorias' => $categorias]);
    }

}