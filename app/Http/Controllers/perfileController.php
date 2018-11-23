<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;
use App\Models\usuarioestablecimiento;
use App\Models\Zonas;
use App\Models\Usuarios;

class perfileController extends Controller
{
    public function validatePerfil()
    {
    
        $usuID = $_GET['u'];
        $establecimientos = $this->validarEstablecimientos(array($usuID));
        return view('perfile.perfile', compact('establecimientos'));
    }

    public function validarEstablecimientos($usuID)
    {

        return usuarioestablecimiento::with('usuarios', 'zonas', 'usuariotipos')
                        ->whereHas('usuarios', function ($usuarioestablecimiento) use ($usuID) {
                            if (!empty($usuID[0])) {
                                $usuarioestablecimiento->whereIn('usuID', $usuID);
                            } else {
                                $usuarioestablecimiento->where('usuEstado', '=', 'A');
                            }
                        })->whereHas('zonas')
                        ->whereHas('usuariotipos')->get()->toArray();
    }

}
