<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use App\Models\Usuarios;

class LoginController extends Controller
{

    public function validateLogin(Request $request)
    {
        try
        {
            $usuario = $request->get('usuario');
            $pass = $request->get('contrasena');
            
            if (empty($usuario) || empty($pass))
                throw new Exception('Complete todos los campos');

            $validar = Usuarios::where(array(['usuario', '=', $usuario], ['clave', '=', $pass]))->get()->toArray();

            if (empty($validar))
                throw new Exception('Usuario o Contraseña incorrectos!');
            
            Session::put('name', $validar[0]['nombre']);
            Session::put('usuID', $validar[0]['usuID']);
            
            return redirect('/home');
            
        } catch (Exception $e)
        {
            $notification = array(
                'title' => 'Error de operación',
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );
            
            return redirect('/login')->with($notification);
        }
    }

}
