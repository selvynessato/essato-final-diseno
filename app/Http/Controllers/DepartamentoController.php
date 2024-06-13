<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Pais;
use App\Models\Departamento; 


class DepartamentoController extends Controller
{
    public function departamento()
    {
        Paginator::useBootstrapFour();

        $departamentos = Departamento::with('pais')->paginate(10);
        $paises = Pais::all();
        
        return view('DepartamentoMunicipio.departamento', compact('departamentos', 'paises'));
    }
    
        public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'cboDepartamentoP' => 'required',
            'txtDepartamentoN' => 'required',
            'txtDepartamentoC' => 'required|numeric|unique:departamento,id_departamento',
        ]);

        // Crear un nuevo departamento
        $departamento = new Departamento();
        $departamento->id_pais = $request->input('cboDepartamentoP');
        $departamento->nombre_departamento = $request->input('txtDepartamentoN');
        $departamento->id_departamento = $request->input('txtDepartamentoC');

        // Guardar el nuevo departamento
        $departamento->save();

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('creacion-exitosa', 'Departamento creado correctamente');
    }

    
    public function update(Request $request, $id)
    {
        // Validación de datos (opcional, pero recomendado)
        $request->validate([
            'cboDepartamentoP' => 'required',
            'txtDepartamentoN' => 'required',
            'txtDepartamentoC' => 'required|numeric',
        ]);

        // Buscar el departamento por ID
        $departamento = Departamento::findOrFail($id);

        // Actualizar los campos del departamento
        $departamento->id_pais = $request->input('cboDepartamentoP');
        $departamento->nombre_departamento = $request->input('txtDepartamentoN');
        $departamento->id_departamento = $request->input('txtDepartamentoC');

        // Guardar los cambios
        $departamento->save();

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('actualizado-exitosa', 'Departamento actualizado correctamente');
    }


    public function destroy($id)
    {
        // Buscar el departamento por ID y eliminarlo
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('eliminacion-exitosa', 'Departamento eliminado correctamente');
    }
}