<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministradorController extends Controller
{
    public function fncAdministradorVista()
    {
        return view('Administrador.Dashboard.index');
    }

}
