<?php

namespace App;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Proyecto extends Model
{
    protected $table = "sgcsprotproyecto";
    protected $primaryKey = "PROid_proyecto";
    protected $fillable = [
        'PROnombre_proyecto', 'USUid_usuario', 'PROfecha_inicio_proyecto', 'PROfecha_fin_proyecto', 'PROestado_proyecto'
    ];

    public static function fncListarProyectos()
    {
        $resultado = Proyecto::all();
        return $resultado;
    }

    public static function fncRegistrarProyecto(Request $request)
    {
        $proyecto = new Proyecto();
        $proyecto->PROnombre_proyecto = $request->input('PROnombre_proyecto');
        $proyecto->USUid_usuario = $request->input('USUid_usuario');
        $proyecto->PROfecha_inicio_proyecto = Carbon::parse($request->input('PROfecha_inicio_proyecto'));
        $proyecto->PROfecha_fin_proyecto = Carbon::parse($request->input('PROfecha_fin_proyecto'));
        $proyecto->PROestado_proyecto = $request->input('PROestado_proyecto');
        $proyecto->save();
        return $proyecto;
    }

    public static function fncEditarProyecto($PROid_proyecto)
    {
        $resultado = Proyecto::findorfail($PROid_proyecto);
        return $resultado;
    }

    public static function fncModificarProyecto(Request $request)
    {
        $proyecto = Proyecto::findorfail($request->input('PROid_proyecto'));
        $proyecto->PROnombre_proyecto = $request->input('PROnombre_proyecto');
        $proyecto->USUid_usuario = $request->input('USUid_usuario');
        $proyecto->PROfecha_inicio_proyecto = Carbon::parse($request->input('PROfecha_inicio_proyecto'));
        $proyecto->PROfecha_fin_proyecto = Carbon::parse($request->input('PROfecha_fin_proyecto'));
        $proyecto->PROestado_proyecto = $request->input('PROestado_proyecto');
        $proyecto->save();
        return $proyecto;
    }

    public static function fncProyectoEncargado()
    {
        $resultado = DB::table('sgcsprotproyecto as p')
            ->select('p.PROid_proyecto','p.PROnombre_proyecto','u.USUnombre_usuario','u.USUapellido_usuario','p.PROfecha_inicio_proyecto','p.PROfecha_fin_proyecto','p.PROestado_proyecto')
            ->join('sgcsusutusuario as u','u.USUid_usuario','p.USUid_usuario')
            ->get();
        return $resultado;
    }
}