<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoMensaje extends Model
{
    protected $table = 'contacto';
    protected $primaryKey = 'id_contacto';

    protected $fillable = [
        'id_contacto',
        'id_encontraressato',
        'id_municipio',
        'nombre_contacto',
        'correo_contacto',
        'telefono_contacto',
        'trabajoen_contacto',
        'asunto_contacto',
        'pais_contacto',
        'departamento_contacto',
        'mensaje_contacto',
    ];

    public $timestamps = true;

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_contacto', 'id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_contacto', 'id');
    }
}