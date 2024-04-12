<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recurso';
    protected $primaryKey = 'id_recurso';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_recurso',
        'nombre_recurso',
        'contenido_recurso',
        'descripcion_recurso',
        'fechaPublic_recurso',
        'img_recurso',
        'slug_recurso',
        'recurso_recurso',
        'id_categoria_recurso',
        'id_usuario'
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaRecurso::class, 'id_categoria_recurso', 'id_categoria_recurso');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
}
