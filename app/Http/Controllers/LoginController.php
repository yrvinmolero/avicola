<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Usuarios;

class LoginController extends Controller
{

    public function validateLogin(Request $request)
    {
        $usuario = $request->get('usuario');
        $pass = $request->get('contrasena');

        if ($usuario != '' || $pass != '') {
            $validar = Usuarios::where(array(['usuario', '=', $usuario], ['clave', '=', $pass]))->get()->toArray();

            if (!empty($validar)) {
                $notification = array(
                    'title' => 'Email ingresado es incorrecto!',
                    'message' => 'Formato de email incorrecto, verifique.',
                    'alert-type' => 'success'
                );
                Session::put('name', $validar[0]['nombre']);
                Session::put('usuID', $validar[0]['usuID']);
                return redirect('/home')->with($notification, $validar);
            } else {
                $notification = array(
                    'title' => 'Usuario o Contraseña incorrectos!',
                    'message' => 'Por favor verifique.',
                    'alert-type' => 'error'
                );
                return redirect('/login')->with($notification);
            }
        } else {
            $notification = array(
                'title' => 'Campos sin rellenar!',
                'message' => 'Hay campos sin rellenar, por favor verifique.',
                'alert-type' => 'error'
            );
            return redirect('/login')->with($notification);
        }
    }

}
