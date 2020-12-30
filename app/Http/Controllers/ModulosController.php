<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModulosController extends Controller
{
    public function index()
    {
        return view('modulos', array('arrayModulos' => Modulo::all()));
    }

    public function edit($id)
    {
        return view('edit', array('modulo' => Modulo::findOrFail($id)));
    }

    public function cambiarDatos(Request $request)
    {
        $id = $request->input('id');
        $modulo = Modulo::findOrFail($id);
        $modulo->nombre = $request->input('nombre');
        $modulo->especialidad_id = $request->input('especialidad');
        $modulo->ciclo_id = $request->input('ciclo');
        $modulo->save();
        return redirect('modulos');
    }
}
