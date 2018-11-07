<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zonas;

class IndexController extends Controller
{

    public function index()
    {
        $zones = Zonas::with('pubzonas')->whereHas('pubzonas', function ($zonas) {
                    $zonas->where('zonEstado', '=', 'A');
                })->get()->toArray();
        return view('index.index', compact('zones'));
    }

}
