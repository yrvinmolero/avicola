<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Categorias;
use App\Models\Unidades;
use App\Models\CategoriasUnidades;
use App\Models\Distribuciones;
use App\Models\Zonas;
use App\Models\Necesidades;
use App\Models\StockZonas;
use App\Models\Stocknecesidades;

use \DateTime;

class RequirementController extends Controller
{
    public function store(Request $request) 
    {
       
        try {

            DB::beginTransaction();
           
            $inputs = [
                'usuID' => Session::get('usuID'), 
                'necTitulo' => $request->get('requirement')['title'], 
                'necDescripcion' => $request->get('requirement')['description']
            ];

            $requirement = new Necesidades;
            $requirement->fill($inputs);
    
            if(!$requirement->save())
               throw new Exception("Error al crear la necesidad, por favor, intente más tarde.", 1);
            
            for ($i=1; $i <= count($request->get('requirement')['products']) ; $i++) { 
                $inputs = [
                    'stnCantidad' => $request->get('requirement')['products'][$i]['quantity'], 
                    'cunID' => $request->get('requirement')['products'][$i]['categories'],
                    'disID' => $request->get('requirement')['products'][$i]['distribution'],
                    'necID' => $requirement->necID, 
                    'zonID' => $request->get('requirement')['products'][$i]['zones']
                ];

                $stock = new Stocknecesidades;
                $stock->fill($inputs);

                if(!$stock->save())
                    throw new Exception("Error interno, por favor, intente más tarde.", 1);
            }

            DB::commit();

            return json_encode(array(
                "successfull" => true,
                "descripcion" => "La necesidad se ha realizado exitosamente."
                ));

        } catch (Exception $e) {
            DB::rollback();
            return json_encode(array(
                "successfull" => false,
                "descripcion" => $e->getMessage()
            ));
        }
    }


    public function newRequirement()
    {
    	$data['units'] = $this->getUnitsEggs();
    	$data['distribution'] = $this->getDistribution();
        $data['zones'] = $this->getZones();
    	return view('requirement.newRequirement', compact('data'));
    }

    private function getUnitsEggs()
    {
    	return $units = Unidades::where('uniEstado', '=', 'A')->get()->toArray();
    }

    private function getCategoriesEggs(Request $request)
    {
    	return $categories = Categorias::where('catEstado', '=', 'A')->get()->toArray();
    }

    private function getCategoriesUnitsEggs(Request $request)
    {
    	$uniID = $request->get('uniID');

    	return $catUnits = CategoriasUnidades::with('categorias')->where(array(['cunEstado', '=', 'A'], ['uniID', '=', $uniID]))->get()->toArray();
     
    }

    private function getDistribution()
    {
    	return $units = Distribuciones::where('disEstado', '=', 'A')->get()->toArray();
    }

    private function getZones()
    {
      return $zones = Zonas::where('zonEstado', '=', 'A')->get()->toArray();
    }

    public function getRequirement()
    {
        $requirement = Necesidades::with('usuarios')->where('necEstado', '=', "A")->get()->toArray();
        return view('requirement.listRequirement', compact('requirement'));
    }

    public function getProductsRequirement(Request $request)
    {
       $id = $request->get('id');

       $requirement = Necesidades::with('stockNecesidades.categoriasUnidades.unidades', 'stockNecesidades.categoriasUnidades.categorias', 'stockNecesidades.categoriasUnidades.distribuciones');
    }
}
