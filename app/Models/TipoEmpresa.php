<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEmpresa extends Model
{
    protected $table = 'tipo_empresa';
    protected $primaryKey = 'id_tipoEmpresa';

    protected $fillable = [
        'id_tipoEmpresa',
        'clase_tipoEmpresa',
        'descrip_tipoEmpresa',
    ];

    public $timestamps = true; 


    public function empresas()
    {
        return $this->hasMany(Empresa::class, 'id_tipoEmpresa');
    }

}