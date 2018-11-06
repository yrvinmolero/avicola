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
use App\Models\PubZonas;
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
                'pubTitulo' => $request->get('titulo'), 
                'pubDescripcion' => $request->get(  'descripcion'), 
                'pubPrecio' => $request->get('precio')
            ];

            $publication = new Publicaciones;
            $publication->fill($inputs);
    
            if(!$publication->save()){
               throw new Exception("Error al crear la publicación, por favor, intente más tarde.", 1);
               
            }

            $inputs = [
                'zonID' => $request->get('selectZones'), 
                'pubID' => $publication->pubID, 
                'pzoMinimo' => $request->get('pozMinima')
            ];

            $pubZonas = new PubZonas;
            $pubZonas->fill($inputs);
    
            if(!$pubZonas->save()){
               throw new Exception("Error interno, por favor, intente más tarde.", 1);
               
            }

            $inputs = [
                'stoCantidad' => $request->get('selectZones'), 
                'cunID' => $publication->pubID, 
                'disID' => $request->get('pozMinima'),
                'pubID' => $request->get('pozMinima')
            ];

            $stock = new Stock;
            $stock->fill($inputs);
    
            if(!$stock->save()){
               throw new Exception("Error al crear el stock de la publicación, por favor, intente más tarde.", 1);
               
            }
            DB::commit();

            return json_encode(array(
                "sucessful" => true,
                "descripcion" => "La publicación se ha realizado exitosamente."
                ));
        } catch (Exception $e) {
            DB::rollBack();
            return json_encode(array(
                "sucessful" => false,
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
