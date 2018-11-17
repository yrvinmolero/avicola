<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stockzonas;
use App\Models\Zonas;

class IndexController extends Controller
{

    public function index()
    {
        $zones = Stockzonas::with('zonas')->whereHas('zonas', function ($zonas) {
                    $zonas->where('zonEstado', '=', 'A');
                })->get()->toArray();
        dd($zones);
        return view('index.index', compact('zones'));
    }

}
