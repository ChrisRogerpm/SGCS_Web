<?php

namespace App\Http\Controllers\Autenticacion;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SeguridadController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'fncMostrarLogin']);
    }

    public function fncMostrarLogin()
    {
        return view('Autenticacion.LoginVista');
    }

    public function fncValidarLoginJson(Request $request)
    {
        $this->validate($request, [
            'USUemail_usuario' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt([
            'USUemail_usuario' => $request->input('USUemail_usuario'),
            'password' => $request->input('password')
        ])) {
            if (auth()->user()->USUtipo_usuario == 1) {
                return response()->json('Administrador');
            } elseif (auth()->user()->USUtipo_usuario == 2) {
                return response()->json('Equipo');
            }
        }
        return abort(500);
    }

    public function fncCerrarSesion()
    {
        Auth::logout();
        return redirect('Autenticacion/login');
    }
}
