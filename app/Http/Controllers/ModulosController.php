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
        return view('edit');
    }
}
