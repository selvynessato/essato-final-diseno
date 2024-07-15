<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\pais;
use App\Models\departamento;
use App\Models\ContactoMensaje;


class ContactoMensajeController extends Controller
{
    public function index()
    {
        Paginator::useBootstrapFour();
        
        $mensajes = ContactoMensaje::paginate(10);
        $ultimoMensaje = ContactoMensaje::orderBy('id_contacto', 'desc')->first();
        $nuevoIdMensaje = $ultimoMensaje ? $ultimoMensaje->id_contacto + 1 : 1;
        
    
        return view('contacto.contactomensaje', compact('mensajes', 'nuevoIdMensaje'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_contacto' => 'required|integer|unique:contacto,id_contacto',
            'id_encontraressato' => 'nullable|integer',
            'id_municipio' => 'nullable|integer',
            'nombre_contacto' => 'required|string|max:150',
            'correo_contacto' => 'required|string|max:75',
            'telefono_contacto' => 'required|string|max:15',
            'trabajoen_contacto' => 'required|string|max:150',
            'asunto_contacto' => 'required|string|max:255',
            'pais_contacto' => 'required|integer',
            'departamento_contacto' => 'required|integer',
            'mensaje_contacto' => 'required|string',
        ]);
    
        ContactoMensaje::create([
            'id_contacto' => $request->id_contacto,
            'id_encontraressato' => $request->id_encontraressato,
            'id_municipio' => $request->id_municipio,
            'nombre_contacto' => $request->nombre_contacto,
            'correo_contacto' => $request->correo_contacto,
            'telefono_contacto' => $request->telefono_contacto,
            'trabajoen_contacto' => $request->trabajoen_contacto,
            'asunto_contacto' => $request->asunto_contacto,
            'pais_contacto' => $request->pais_contacto,
            'departamento_contacto' => $request->departamento_contacto,
            'mensaje_contacto' => $request->mensaje_contacto,
        ]);
    
        return redirect()->back()->with('creacion-exitosa', 'Mensaje de contacto creado correctamente');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_contacto' => 'required|string|max:150',
            'correo_contacto' => 'required|string|max:75',
            'telefono_contacto' => 'required|string|max:15',
            'trabajoen_contacto' => 'required|string|max:150',
            'asunto_contacto' => 'required|string|max:255',
            'pais_contacto' => 'required|integer',
            'departamento_contacto' => 'required|integer',
            'mensaje_contacto' => 'required|string',
        ]);

        $mensaje = ContactoMensaje::findOrFail($id);
        $mensaje->nombre_contacto = $request->nombre_contacto;
        $mensaje->correo_contacto = $request->correo_contacto;
        $mensaje->telefono_contacto = $request->telefono_contacto;
        $mensaje->trabajoen_contacto = $request->trabajoen_contacto;
        $mensaje->asunto_contacto = $request->asunto_contacto;
        $mensaje->pais_contacto = $request->pais_contacto;
        $mensaje->departamento_contacto = $request->departamento_contacto;
        $mensaje->mensaje_contacto = $request->mensaje_contacto;
        $mensaje->save();

        return redirect()->back()->with('actualizacion-exitosa', 'Mensaje de contacto actualizado correctamente');
    } 

    public function destroy($id)
    {
        $mensaje = ContactoMensaje::findOrFail($id);
        $mensaje->delete();

        return redirect()->back()->with('eliminacion-exitosa', 'Mensaje de contacto eliminado correctamente');
    }
}
