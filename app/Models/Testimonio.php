<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    protected $table = 'testimonio';
    protected $primaryKey = 'id_testimonio';

    protected $fillable = [
        'id_testimonio',
        'nombre_testimonio',
        'descripcion_testimonio',
        'id_empresa',
    ];

    public $timestamps = true;

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}
