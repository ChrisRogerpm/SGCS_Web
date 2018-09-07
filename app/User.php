<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'sgcsusutusuario';
    protected $primaryKey = 'USUid_usuario';
    protected $fillable = [
        'USUnombre_usuario', 'USUapellido_usuario', 'USUdni_usuario', 'USUcelular_usuario', 'USUtipo_usuario', 'USUfoto_usuario', 'USUemail_usuario', 'password'
    ];

    public static function fncListarUsuarios()
    {
        $resultado = User::all();
        return $resultado;
    }

    public static function fncRegistrarUsuario(Request $request)
    {

        if ($request->hasFile('USUfoto_usuario')){
            $archivo = $request->file('USUfoto_usuario');
            $usuario = new User();
            $usuario->USUnombre_usuario = $request->input('USUnombre_usuario');
            $usuario->USUapellido_usuario = $request->input('USUapellido_usuario');
            $usuario->USUdni_usuario = $request->input('USUdni_usuario');
            $usuario->USUcelular_usuario = $request->input('USUcelular_usuario');
            $usuario->USUtipo_usuario = $request->input('USUtipo_usuario');
            $usuario->USUfoto_usuario = $archivo->getClientOriginalName();
            $usuario->USUemail_usuario = $request->input('USUemail_usuario');
            $usuario->password = bcrypt($request->input('USUdni_usuario'));
            $usuario->save();
            $ruta = 'Imagenes';
            $archivo->move($ruta,$archivo->getClientOriginalName());

            return $usuario;
        }else{
            $usuario = new User();
            $usuario->USUnombre_usuario = $request->input('USUnombre_usuario');
            $usuario->USUapellido_usuario = $request->input('USUapellido_usuario');
            $usuario->USUdni_usuario = $request->input('USUdni_usuario');
            $usuario->USUcelular_usuario = $request->input('USUcelular_usuario');
            $usuario->USUtipo_usuario = $request->input('USUtipo_usuario');
            $usuario->USUemail_usuario = $request->input('USUemail_usuario');
            $usuario->password = bcrypt($request->input('USUdni_usuario'));
            $usuario->save();
            return $usuario;
        }
    }

    public static function fncEditarUsuario($PROid_Usuario)
    {
        $usuario = User::findorfail($PROid_Usuario);
        return $usuario;
    }

    public static function fncModificarUsuario(Request $request)
    {
        if ($request->hasFile('USUfoto_usuario')){
            $archivo = $request->file('USUfoto_usuario');
            $usuario = User::findorfail($request->input('USUid_usuario'));
            $usuario->USUnombre_usuario = $request->input('USUnombre_usuario');
            $usuario->USUapellido_usuario = $request->input('USUapellido_usuario');
            $usuario->USUdni_usuario = $request->input('USUdni_usuario');
            $usuario->USUcelular_usuario = $request->input('USUcelular_usuario');
            $usuario->USUtipo_usuario = $request->input('USUtipo_usuario');
            $usuario->USUfoto_usuario = $archivo->getClientOriginalName();
            $usuario->USUemail_usuario = $request->input('USUemail_usuario');
            $usuario->password = bcrypt($request->input('USUdni_usuario'));
            $usuario->save();

            $ruta = 'Imagenes';
            $archivo->move($ruta,$archivo->getClientOriginalName());

            return $usuario;
        }else{
            $usuario = User::findorfail($request->input('USUid_usuario'));
            //$archivo = $request->file('USUfoto_usuario');
            $usuario->USUnombre_usuario = $request->input('USUnombre_usuario');
            $usuario->USUapellido_usuario = $request->input('USUapellido_usuario');
            $usuario->USUdni_usuario = $request->input('USUdni_usuario');
            $usuario->USUcelular_usuario = $request->input('USUcelular_usuario');
            $usuario->USUtipo_usuario = $request->input('USUtipo_usuario');
            $usuario->USUemail_usuario = $request->input('USUemail_usuario');
            $usuario->password = bcrypt($request->input('USUdni_usuario'));
            $usuario->save();
            return $usuario;
        }
    }
}
