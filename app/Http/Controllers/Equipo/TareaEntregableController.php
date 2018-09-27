<?php

namespace App\Http\Controllers\Equipo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TareaEntregableController extends Controller
{
    public function fncListarTareaEntregableJson()
    {

    }

    public function fncRegistrarTareaVista()
    {
        return view('Equipo.Tareas.GestionTareas.RegistrarTareaVista');
    }
    public function fncEditarTareaVista()
    {
        return view('Equipo.Tareas.GestionTareas.EditarTareaVista');
    }

}
