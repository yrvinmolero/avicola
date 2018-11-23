<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\Modules;
use App\Models\usuarioestablecimiento;
use App\Models\Usuarios;

class PerfileController extends Controller
{

    use Modules;

    public function validatePerfil()
    {
        $modules = $this->getModules(array('N', 'C'));
        $usuID = Session::get('usuID');
        $establecimientos = $this->validarEstablecimientos(array($usuID));
        $datausers = $this->dataContact();
        return view('perfile.perfile', compact('modules', 'establecimientos', 'datausers'));
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

    public function dataContact()
    {
        return Usuarios::where('usuID', '=', Session::get('usuID'))->get()->toArray();
    }

    public function saveDate(Request $request)
    {
        try
        {
            DB::beginTransaction();

            $inputs = [
                'usuID' => Session::get('usuID'),
                'correo' => $request->get('personalData')['email'],
                'telefono' => $request->get('personalData')['tel'],
                'facebook' => $request->get('personalData')['facebook'],
                'twitter' => $request->get('personalData')['twitter'],
                'linkedin' => $request->get('personalData')['linkedin']
            ];

            $usuarios = Usuarios::find(Session::get('usuID'));
            $usuarios->correo = $request->get('personalData')['email'];
            $usuarios->telefono = $request->get('personalData')['tel'];
            $usuarios->facebook = $request->get('personalData')['facebook'];
            $usuarios->twitter = $request->get('personalData')['twitter'];
            $usuarios->linkedin = $request->get('personalData')['linkedin'];


            if (!$usuarios->save())
                throw new Exception("Error al guardar datos, por favor, intente más tarde.", 1);

            DB::commit();

            return json_encode(array(
                "successfull" => true,
                "descripcion" => "Los datos se guardaron exitosamente."
            ));
        } catch (Exception $e)
        {
            DB::rollback();
            return json_encode(array(
                "successfull" => false,
                "descripcion" => $e->getMessage()
            ));
        }
    }

}
