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
        $nombre = $request->input('nombre');
        //$modulo = Modulo::findOrFail($id);
        //$idModulo = $modulo->id;
        /*
        $modulo->update($request->all());*/
        return "Valor: " . $nombre;
    }
}
