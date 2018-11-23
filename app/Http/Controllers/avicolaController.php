<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Modules;
use App\Models\Categorias;

class avicolaController extends Controller
{

    use Modules;

    public function validateAvicola()
    {
        $modules = $this->getModules(array('N', 'C'));
        $categories= $this->getCategory();
        return view('avicola.avicola', compact('modules', 'categories'));
    }

    public function getCategory()
    {
        $categories = Categorias::where('catEstado', '=', 'A');
        return $categories->get()->toArray();
    }

}
