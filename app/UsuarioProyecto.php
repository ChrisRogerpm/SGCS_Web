<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UsuarioProyecto extends Model
{
    protected $table = "sgcsusupropusuarioproyecto";

    protected $primaryKey = "USUPROid_usuarioproyecto";

    protected $fillable = [
        'USUid_usuario', 'PROid_proyecto', 'USUPROestado_usuarioproyecto'
    ];

    public static function fncListarUsuarioProyecto(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = DB::table('sgcsusupropusuarioproyecto as usupro')
            ->select('usu.USUnombre_usuario', 'usu.USUapellido_usuario')
            ->join('sgcsusutusuario as usu', 'usu.USUid_usuario', 'usupro.USUid_usuario')
            ->where('usupro.PROid_proyecto', $proyecto_id)
            ->where('usupro.USUPROestado_usuarioproyecto', '!=', '0')
            ->get();

        return $resultado;
    }

    public static function fncUsuarioProyectoTotal(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = DB::table('sgcsusupropusuarioproyecto as usupro')
            ->where('usupro.PROid_proyecto', $proyecto_id)
            ->where('usupro.USUPROestado_usuarioproyecto', '!=', '0')
            ->count();
//        ->get();
        return $resultado;
    }
}
