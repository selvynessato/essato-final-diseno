<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
 protected $table = 'empresa';
    protected $primaryKey = 'id_empresa';

    protected $fillable = [
        'id_empresa',
        'nombre_empresa',
        'img_empresa',
        'estado_empresa',
        'fechainicio_empresa',
        'id_tipoEmpresa',
        'id_actividad',
    ];

    public $timestamps = true;
    
    // Relación con TipoEmpresa
    public function tipoEmpresa()
    {
        return $this->belongsTo(TipoEmpresa::class, 'id_tipoEmpresa');
    }

    // Relación con Actividad
    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'id_actividad');
    }
}
