<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encontraressato extends Model
{
    protected $table = 'encontraressato';

    protected $primaryKey = 'id_encontraressato';

    protected $fillable = [
        'nombre_encontraressato',
        'descripcion_encontraressato',
    ];

    public $timestamps = true;
}
