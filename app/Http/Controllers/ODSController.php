<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa; 

class ODSController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('ods.ods')->with([
            'empresas' => $empresas
        ]);
    }
}
