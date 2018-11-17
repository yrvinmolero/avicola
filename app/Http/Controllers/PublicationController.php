<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Unidades;
use App\Models\CategoriasUnidades;
use App\Models\Distribuciones;
use App\Models\Zonas;
use App\Models\Publicaciones;
use App\Models\StockZonas;
use App\Models\Stock;
use \DateTime;

use App\Traits\Modules;

class PublicationController extends Controller
{
	use Modules;

    public function store(Request $request) 
    {
        
        try {

            DB::beginTransaction();
           
            $inputs = [
                'usuID' => 1, 
                'pubTitulo' => $request->get('publication')['title'], 
                'pubDescripcion' => $request->get('publication')['description']
            ];

            $publication = new Publicaciones;
            $publication->fill($inputs);
    
            if(!$publication->save())
               throw new Exception("Error al crear la publicación, por favor, intente más tarde.", 1);
            
            for ($i=1; $i <= count($request->get('publication')['products']) ; $i++) { 
                $inputs = [
                    'stoCantidad' => $request->get('publication')['products'][$i]['quantity'], 
                    'cunID' => $request->get('publication')['products'][$i]['categories'],
                    'disID' => $request->get('publication')['products'][$i]['distribution'],
                    'pubID' => $publication->pubID, 
                    'stoPrecio' => $request->get('publication')['products'][$i]['price']
                ];

                $stock = new Stock;
                $stock->fill($inputs);

                if(!$stock->save())
                    throw new Exception("Error interno, por favor, intente más tarde.", 1);

                $inputs = [
                    'stoID' => $stock->stoID, 
                    'zonID' => $request->get('publication')['products'][$i]['zones'],
                    'pzoMinimo' => $request->get('publication')['products'][$i]['quantityMin'],
                    'pubID' => $publication->pubID 
                ];

                $stockZonas = new StockZonas;
                $stockZonas->fill($inputs);

                if(!$stockZonas->save())
                    throw new Exception("Error interno, por favor, intente más tarde.", 1);
            }

            DB::commit();

            return json_encode(array(
                "successfull" => true,
                "descripcion" => "La publicación se ha realizado exitosamente."
                ));

        } catch (Exception $e) {
            DB::rollback();
            return json_encode(array(
                "successfull" => false,
                "descripcion" => $e->getMessage()
            ));
        }
    }


    public function newPublication()
    {
    	$modules = $this->getModules(array('S', 'C'));
    	$data['units'] = $this->getUnitsEggs();
    	$data['distribution'] = $this->getDistribution();
        $data['zones'] = $this->getZones();
    	return view('publications.newPublication', compact('modules', 'data'));
    }

    private function getUnitsEggs()
    {
    	return $units = Unidades::where('uniEstado', '=', 'A')->get()->toArray();
    }

    public function getCategoriesEggs(Request $request)
    {
    	return $categories = Categorias::where('catEstado', '=', 'A')->get()->toArray();
    }

    public function getCategoriesUnitsEggs(Request $request)
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
}
