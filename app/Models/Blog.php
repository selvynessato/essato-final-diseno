<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $primaryKey = 'id_blog';

    protected $fillable = [
        'nombre_blog',
        'contenido_blog',
        'descripcion_blog',
        'fechaPublic_blog',
        'img_blog',
        'slug_blog',
        'recursos',
        'id_usuario',
        'id_categoria'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }
}
