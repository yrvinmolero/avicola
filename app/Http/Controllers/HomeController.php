<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;
use App\Models\Publicaciones;
use App\Models\Stockzonas;
use App\Traits\Modules;

class HomeController extends Controller
{

    use Modules;

    public function validateHome()
    {
        $zonID = null;

        if (!empty($_GET['comuna']))
            $zonID = $_GET['comuna'];

        $zonID = 2;
        $modules = $this->getModules(array('N', 'C'));
        $publications = $this->getPublications(array($zonID));
        return view('home.home', compact('modules', 'publications'));
    }

    public function getPublications($zonID)
    {

        $publications = Publicaciones::with('stock.stockzonas.zonas', 'usuarios');

//        if (!empty($zonID[0])) {
//            $publications->whereHas('stock.stockZonas', function($zonas) use($zonID) {
//                $zonas->where('zonID', '=', $zonID[0]);
//            });
//        }
        return $publications->get()->toArray();
    }

    public function getProducts(Request $request)
    {
        $pubID = $request->get('pubID');
        $products = Stockzonas::with('stock.publicaciones', 'stock.categoriasunidades.unidades', 'stock.categoriasunidades.categorias', 'stock.distribuciones');

        $products->whereHas('stock.publicaciones', function($products) use($pubID) {
            $products->where('pubID', '=', $pubID);
        });

        $products->whereHas('stock.categoriasunidades');

//        if (!empty($zonID[0])) {
//            $publications->whereHas('stock.stockZonas', function($zonas) use($zonID) {
//                $zonas->where('zonID', '=', $zonID[0]);
//            });
//        }
        return $products->get()->toJson();
    }

}
