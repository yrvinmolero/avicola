<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;
use App\Models\Publicaciones;
use App\Models\Stock;
use App\Traits\Modules;

class HomeController extends Controller
{

    use Modules;

    public function validateHome()
    {
        $zonID = null;

        if (!empty($_GET['comuna']))
            $zonID = $_GET['comuna'];
        $modules = $this->getModules(array('N', 'C'));
        $publications = $this->getPublications($zonID);
        return view('home.home', compact('modules', 'publications'));
    }

    public function getPublications($zonID)
    {
        if (!empty($zonID)) {
            $publications = Stock::with('stockzonas.zonas', 'publicaciones.usuarios');
            $publications->whereHas('stockzonas', function($publications) use ($zonID) {
                $publications->whereIn('zonID', [$zonID]);
            });
        } else {
            $publications = Publicaciones::with('stock.stockZonas.zonas', 'usuarios');
        }
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
