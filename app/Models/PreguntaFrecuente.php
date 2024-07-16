<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaFrecuente extends Model
{
    use HasFactory;

    protected $table = 'preguntas_frecuentes';
    protected $primaryKey = 'id_preguntafrecuente';

    protected $fillable = [
        'titulo_preguntafrecuente',
        'descrip_preguntafrecuente',
    ];

    public $timestamps = true;
}
