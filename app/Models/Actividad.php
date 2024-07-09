<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividad';
    protected $primaryKey = 'id_actividad';

    protected $fillable = [
        'id_actividad',
        'nombre_actividad',
        'descrip_actividad',
    ];

    public $timestamps = true;

    
    public function empresas()
    {
        return $this->hasMany(Empresa::class, 'id_actividad');
    }  
    
}