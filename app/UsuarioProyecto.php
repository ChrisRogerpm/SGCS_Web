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
            ->select('usupro.USUPROid_usuarioproyecto','usu.USUnombre_usuario', 'usu.USUapellido_usuario', 'usu.USUfoto_usuario')
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
        return $resultado;
    }

    public static function fncRegistrarUsuarioProyecto(Request $request)
    {
        $usuario = $request->input('USUid_usuario');
        $proyecto_id = $request->input('PROid_proyecto');
        for ($i = 0; $i < count($usuario); $i++) {
            if (self::fncValidarUsuarioProyecto($usuario[$i]) < 1){
                $usuario_proyecto = new UsuarioProyecto();
                $usuario_proyecto->USUid_usuario = $usuario[$i];
                $usuario_proyecto->PROid_proyecto = $proyecto_id;
                $usuario_proyecto->USUPROestado_usuarioproyecto = 1;
                $usuario_proyecto->save();
            }
        }
    }

    public static function fncValidarUsuarioProyecto($USUid_usuario)
    {
        return UsuarioProyecto::where('USUid_usuario',$USUid_usuario)->count();
    }

    public static function fncDeshabilitarUsuarioProyecto(Request $request)
    {
        $resultado = false;
        $usuarioproyecto = $request->input('USUPROid_usuarioproyecto');
        try{
            UsuarioProyecto::findorfail($usuarioproyecto)->update(['USUPROestado_usuarioproyecto' => 0]);;
            $resultado = true;
        }catch (\Exception $ex){
        }
        return $resultado;
    }
}
