<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stockzonas;
use App\Models\Zonas;

class IndexController extends Controller
{

    public function index()
    {
        $zones =  Zonas::where('zonEstado', '=', 'A')->get()->toArray(); 
        return view('index.index', compact('zones'));
    }

}
