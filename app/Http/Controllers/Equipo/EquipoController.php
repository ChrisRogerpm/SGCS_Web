<?php

namespace App\Http\Controllers\Equipo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipoController extends Controller
{
    public function fncMostrarEquipo()
    {
        return view('Equipo.Dashboard.index');
    }
}