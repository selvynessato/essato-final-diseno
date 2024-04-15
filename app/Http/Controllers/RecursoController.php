<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\recurso; 

class RecursoController extends Controller
{
    public function index()
    {
        $recursos = Recurso::all();          
        return view('recursos.recurso', ['recursos' => $recursos]);
    }

    public function detallerecurso(Recurso $recurso)
    {
        return view('recursos.recursodetalle', ['recurso' => $recurso]);
    }

    public function descargarRecurso($nombre_archivo)
    {
        // Verificar si el archivo existe
        if (!Storage::exists('public/recursos/' . $nombre_archivo)) {
            abort(404, 'El recurso solicitado no existe.');
        }

        // Obtener la ruta del archivo
        $ruta_archivo = storage_path('app/public/recursos/' . $nombre_archivo);

        // Descargar el archivo
        return response()->download($ruta_archivo)->deleteFileAfterSend(true);
    }
}
