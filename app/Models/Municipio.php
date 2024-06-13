<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio'; // Nombre de la tabla

    protected $primaryKey = 'id_municipio'; // Clave primaria

    public $timestamps = true; // Si la tabla tiene columnas de timestamps

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre_municipio', 
        'id_departamento'
    ];

    // Define las relaciones con otros modelos si las hay

    // Por ejemplo, si un municipio pertenece a un departamento:
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento', 'id_departamento');
    }
}
