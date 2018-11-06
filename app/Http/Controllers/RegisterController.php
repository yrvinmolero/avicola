<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class RegisterController extends Controller
{

    public function validateRegister(Request $request)
    {
        //se obtienen valores de form register.blade.php 
        $usuario = $request->get('usuario');
        $email = $request->get('email');
        $pass = $request->get('contrasena');
        $rpass = $request->get('rcontrasena');
        $check = $request->get('check');

        //valida que los campos tengan valores
        if (!isset($usuario, $email, $pass, $rpass, $check)) {
            //array que contiene los valores de la notificacion (alert)
            $notification = array(
                'title' => 'Campos sin rellenar!',
                'message' => 'Hay campos sin rellenar, por favor verifique.',
                'alert-type' => 'error'
            );
            //se retorna una redireccion con array $notificaction
            return redirect('/register')->with($notification);
        } else {
            //valida que el email cumpla con el formato correspondiente
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //array que contiene los valores de la notificacion (alert)
                $notification = array(
                    'title' => 'Email ingresado es incorrecto!',
                    'message' => 'Formato de email incorrecto, verifique.',
                    'alert-type' => 'error'
                );
                return redirect('/register')->with($notification);
            } else {
                //valida que el correo ingresado no este en uso por una cuenta existente
                if (Usuarios::where('correo', '=', $email)->exists()) {
                    $notification = array(
                        'title' => 'Ya existe una cuenta con ese Email!',
                        'message' => 'Actualmente existe una cuenta registrada con ese email.',
                        'alert-type' => 'error'
                    );
                    return redirect('/register')->with($notification);
                } else {
                    //valida que las contraseñas ingresadas coincidan
                    if ($pass == $rpass) {
                        //se genera un objeto de Usuarios
                        $newUser = new Usuarios();
                        //se mapean campos y valores a insertar en $inputs
                        $inputs = ['usuario' => $usuario, 'correo' => $email, 'clave' => $pass, 'nombre' => 'Nombre de Usuario', 'direccion' => 'Dirección', 'telefono' => 'telefono'];
                        //se utiliza fill para simplificar el llamado campo - valor
                        $newUser->fill($inputs);
                        //se guarda el insert en DB
                        $newUser->save();
                        //se obtine el ultimo id insertado
                        $newUser = $newUser->usuID;
                        //valida que el insert se realizo correctamente
                        if ($newUser > 0) {
                            $notification = array(
                                'title' => 'Registro Exitoso!',
                                'message' => 'Ahora puedes ingresar al portal Avicola.',
                                'alert-type' => 'success'
                            );
                            return redirect('/login')->with($notification);
                        } else {
                            $notification = array(
                                'title' => 'Problemas al realizar el registro!',
                                'message' => 'Intente mas tarde',
                                'alert-type' => 'error'
                            );
                        }
                    } else {
                        $notification = array(
                            'title' => 'Las contraseñas no coinciden!',
                            'message' => 'Las contraseñas ingresadas no son iguales, por favor intente nueva mente.',
                            'alert-type' => 'error'
                        );
                        return redirect('/register')->with($notification);
                    }
                }
            }
        }
    }

}
