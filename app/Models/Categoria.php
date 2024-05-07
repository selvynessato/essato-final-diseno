<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';

    protected $primaryKey = 'id_categoria';

    protected $fillable = [
        'nombre_categoria',
        'descripcion_categoria',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'id_categoria', 'id_categoria');
    }

    public function filtrarBlogs(Request $request)
    {
        $idCategoria = $request->input('id_categoria');
        $blogs = Blog::where('id_categoria', $idCategoria)->paginate(9);
        return view('blog.lista_blogs', ['blogs' => $blogs]);
    }


}
