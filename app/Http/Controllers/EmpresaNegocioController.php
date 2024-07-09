<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\TipoEmpresa; 
use App\Models\Actividad; 
use App\Models\Empresa; 


class EmpresaNegocioController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();

        $empresas = Empresa::paginate(10);
        $ultimoEmpresa = Empresa::orderBy('id_empresa', 'desc')->first();
        $nuevoIdEmpresa = $ultimoEmpresa ? $ultimoEmpresa->id_empresa + 1 : 1;
        $tiposEmpresa = TipoEmpresa::all();
        $actividades = Actividad::all();

        return view('empresa.empresa_negocio', compact('empresas', 'nuevoIdEmpresa', 'tiposEmpresa', 'actividades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_empresa' => 'required|integer|unique:empresa,id_empresa',
            'nombre_empresa' => 'required|string|max:200',
            'img_empresa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'estado_empresa' => 'required|boolean',
            'fechainicio_empresa' => 'required|date',
            'id_tipoEmpresa' => 'required|integer|exists:tipo_empresa,id_tipoEmpresa',
            'id_actividad' => 'required|integer|exists:actividad,id_actividad',
        ]);

        // Manejar la subida de la imagen
        if ($request->hasFile('img_empresa')) {
            $image = $request->file('img_empresa');
            $name = $image->getClientOriginalName(); // Utilizar el nombre original de la imagen
            $destinationPath = public_path('/images/empresa');
            $image->move($destinationPath, $name);
            $imgUrl = 'images/empresa/' . $name;
        } else {
            return redirect()->back()->with('error-noexitoso', 'Debe subir una imagen para la empresa.');
        }

        // Crear la empresa
        Empresa::create([
            'id_empresa' => $request->input('id_empresa'),
            'nombre_empresa' => $request->input('nombre_empresa'),
            'img_empresa' => $imgUrl,
            'estado_empresa' => $request->input('estado_empresa'),
            'fechainicio_empresa' => $request->input('fechainicio_empresa'),
            'id_tipoEmpresa' => $request->input('id_tipoEmpresa'),
            'id_actividad' => $request->input('id_actividad'),
        ]);

        return redirect()->back()->with('creacion-exitosa', 'Empresa creada correctamente');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_empresa' => 'required|string|max:200',
            'img_empresa' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'estado_empresa' => 'required|boolean',
            'fechainicio_empresa' => 'required|date',
            'id_tipoEmpresa' => 'required|integer|exists:tipo_empresa,id_tipoEmpresa',
            'id_actividad' => 'required|integer|exists:actividad,id_actividad',
        ]);

        $empresa = Empresa::findOrFail($id);

        // Actualizar los campos
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->estado_empresa = $request->estado_empresa;
        $empresa->fechainicio_empresa = $request->fechainicio_empresa;
        $empresa->id_tipoEmpresa = $request->id_tipoEmpresa;
        $empresa->id_actividad = $request->id_actividad;
        
        if ($request->hasFile('img_empresa_nueva')) {
            $imagenNueva = $request->file('img_empresa_nueva');
            $nombreOriginal = $imagenNueva->getClientOriginalName();
            $imagenNueva->move(public_path('images/empresa/'), $nombreOriginal);
    
            if ($empresa->img_empresa && file_exists(public_path($empresa->img_empresa))&& $empresa->img_empresa != 'images/empresa/' . $nombreOriginal) {
                unlink(public_path($empresa->img_empresa));
            }
            $empresa->img_empresa = 'images/empresa/' . $nombreOriginal;
        }
        
        $empresa->save();
        
        return redirect()->back()->with('actualizacion-exitosa', 'Empresa actualizada correctamente');      
    }

    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);

        // Eliminar la imagen asociada antes de eliminar la empresa
        if ($empresa->img_empresa && file_exists(public_path($empresa->img_empresa))) {
            unlink(public_path($empresa->img_empresa));
        }

        $empresa->delete();

        return redirect()->back()->with('eliminacion-exitosa', 'Empresa eliminada correctamente');
    }
}