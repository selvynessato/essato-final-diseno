<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresa';

    protected $primaryKey = 'id_empresa';

    protected $fillable = [
        'nombre_empresa',
        'img_empresa',
        'estado_empresa',
        'fechainicio_empresa',
        'id_tipoEmpresa',
    ];
    
    public function tipoEmpresa()
    {
        return $this->belongsTo(TipoEmpresa::class, 'id_tipoEmpresa', 'id_tipoEmpresa');
    }

    public function testimonios()
    {
        return $this->hasMany(Testimonio::class, 'id_empresa', 'id_empresa');
    }

    public function obtenerTotalTestimonios()
    {
        return $this->testimonios()->count();
    }
}
