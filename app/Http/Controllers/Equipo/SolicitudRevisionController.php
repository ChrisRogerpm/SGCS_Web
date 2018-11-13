<?php

namespace App\Http\Controllers\Equipo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudRevisionController extends Controller
{
    public function fncSolicitudRevisionVista($PROid_proyecto)
    {
        return view('Equipo.SolicitudRevision.SolicitudRevisionVista',compact('PROid_proyecto'));
    }
}
