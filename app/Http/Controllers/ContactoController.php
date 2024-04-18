<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contacto;
use App\Models\Pais;
use App\Models\Departamento;
use App\Models\Encontraressato;


class ContactoController extends Controller
{
    public function create()
    {
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $encontraressatos = Encontraressato::all();

        return view('welcome', compact('paises', 'departamentos', 'encontraressatos'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre_contacto' => 'required|string|max:150',
        'correo_contacto' => 'required|email|max:75',
        'telefono_contacto' => 'required|string|max:15',
        'trabajoen_contacto' => 'required|string|max:150',
        'asunto_contacto' => 'required|string|max:255',
        'pais_contacto' => 'required|exists:pais,id_pais',
        'departamento_contacto' => 'required|exists:departamento,id_departamento',
        'comoEncontraste_contacto' => 'required|exists:encontraressato,id_encontraressato',
        'mensaje_contacto' => 'required|string|max:200',
    ]);

    $contacto = new Contacto();

    $contacto->nombre_contacto = $request->input('nombre_contacto');
    $contacto->correo_contacto = $request->input('correo_contacto');
    $contacto->telefono_contacto = $request->input('telefono_contacto');
    $contacto->trabajoen_contacto = $request->input('trabajoen_contacto');
    $contacto->asunto_contacto = $request->input('asunto_contacto');
    $contacto->pais_contacto = $request->input('pais_contacto');
    $contacto->departamento_contacto = $request->input('departamento_contacto');
    $contacto->id_encontraressato = $request->input('comoEncontraste_contacto');           
    $contacto->mensaje_contacto = $request->input('mensaje_contacto');

    $contacto->save();

    return redirect()->route('contacto.create')->with('success', '¡El mensaje ha sido enviado correctamente!');
}

}