<?php

namespace App\Http\Controllers\Administrador;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function fncUsuarioVista()
    {
        return view('Administrador.Usuario.UsuarioVista');
    }

    public function fncRegistrarUsuarioVista()
    {
        return view('Administrador.Usuario.RegistrarUsuarioVista');
    }

    public function fncEditarUsuarioVista($id)
    {
        $id_Usuario = $id;
        return view('Administrador.Usuario.EditarUsuarioVista',compact('id_Usuario'));
    }

    public function fncListarUsuariosJson()
    {
        $resultado = false;
        $Usuario_lista = "";
        $mensaje_error = "";
        try {
            $Usuario_lista = User::fncListarUsuarios();
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Usuario_lista, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarUsuarioJson(Request $request)
    {
        $resultado = false;
        $Usuarios = "";
        $mensaje_error = "";
        try {
            $Usuarios = User::fncRegistrarUsuario($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Usuarios, 'mensaje' => $mensaje_error]);

    }

    public function fncEditarUsuarioJson(Request $request)
    {
        $PROid_Usuario = $request->input('USUid_usuario');
        $resultado = false;
        $Usuario = "";
        $mensaje_error = "";
        try {
            $Usuario = User::fncEditarUsuario($PROid_Usuario);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Usuario, 'mensaje' => $mensaje_error]);
    }

    public function fncModificarUsuarioJson(Request $request)
    {
        $resultado = false;
        $Usuarios = "";
        $mensaje_error = "";
        try {
            $Usuarios = User::fncModificarUsuario($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Usuarios, 'mensaje' => $mensaje_error]);
    }
}
