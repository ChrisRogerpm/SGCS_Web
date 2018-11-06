<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ComiteCambio extends Model
{
    protected $table = 'sgcscomcapcomitecambio';
    protected $primaryKey = 'COMCAid_comitecambio';
    protected $fillable = ['USUPROid_usuarioproyecto', 'COMCAestado_comitecambio'];

    public static function fncRegistrarComiteCambioProyecto(Request $request)
    {
        $usuario = $request->input('USUPROid_usuarioproyecto');
        for ($i = 0; $i < count($usuario); $i++) {
            if (self::fncValidarComiteCambio($usuario[$i]) < 1) {
                $comitecambio = new ComiteCambio();
                $comitecambio->USUPROid_usuarioproyecto = $usuario[$i];
                $comitecambio->COMCAestado_comitecambio = 1;
                $comitecambio->save();
            }
        }
    }

    public static function fncValidarComiteCambio($USUPROid_usuarioproyecto)
    {
        $resultado = DB::table('sgcscomcapcomitecambio')
            ->where('USUPROid_usuarioproyecto', $USUPROid_usuarioproyecto)
            ->count();
        return $resultado;

    }

    public static function fncListarComiteCambio(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = DB::table('sgcscomcapcomitecambio as comca')
            ->select('comca.COMCAid_comitecambio','usu.USUnombre_usuario','usu.USUapellido_usuario','comca.COMCAestado_comitecambio')
            ->join('sgcsusupropusuarioproyecto as usupro', 'usupro.USUPROid_usuarioproyecto', 'comca.USUPROid_usuarioproyecto')
            ->join('sgcsusutusuario as usu', 'usu.USUid_usuario', 'usupro.USUid_usuario')
            ->where('usupro.PROid_proyecto', $proyecto_id)
            ->get();
        return $resultado;
    }

    public static function fncCambiarEstadoComiteCambioProyecto(Request $request): bool
    {
        $resultado = false;
        $COMCAid_comitecambio = $request->input('COMCAid_comitecambio');
        $COMCAestado_comitecambio = $request->input('COMCAestado_comitecambio');
        try {
            $comitecambio = ComiteCambio::findorfail($COMCAid_comitecambio);
            $comitecambio->COMCAestado_comitecambio = $COMCAestado_comitecambio;
            $comitecambio->save();
            $resultado = true;
        } catch (\Exception $ex) {
        }
        return $resultado;
    }
}
