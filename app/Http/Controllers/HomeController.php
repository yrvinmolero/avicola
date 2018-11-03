<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;
use App\Models\PubZonas;

use App\Traits\Modules;

class HomeController extends Controller {

    use Modules;
    
    public function validateHome() {
        $zonID = $_GET['comuna'];
        $modules = $this->getModules(array('N', 'C'));
        $publications = $this->getPublications(array($zonID));
        return view('home.home', compact('modules', 'publications'));
    }

    public function getPublications($zonID) 
    {
        return Pubzonas::with('publicaciones.usuarios', 'zonas')
        		->whereHas('zonas', function ($zonas) use ($zonID){
        			$zonas->whereIn('zonID', $zonID);
        		})->get()->toArray();
    }
}
