<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;
use App\Models\StockZonas;
use App\Traits\Modules;

class HomeController extends Controller
{

    use Modules;

    
    public function validateHome() {
        $zonID = null;

        if(!empty($_GET['comuna']))
            $zonID = $_GET['comuna'];

        $modules = $this->getModules(array('N', 'C'));
        $publications = $this->getPublications(array($zonID));
        //dd($modules, $publications);
        return view('home.home', compact('modules', 'publications'));
    }

    public function getPublications($zonID)
    {
       return  StockZonas::with('stock.publicaciones.usuarios', 'zonas')
        		->whereHas('zonas', function ($zonas) use ($zonID){
                    if(!empty($zonID[0]))
        			    $zonas->whereIn('zonID', $zonID);
                    else
                        $zonas->where('zonEstado', '=', 'A');
        		})->get()->toArray();

    }

}
