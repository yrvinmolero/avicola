<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;
use App\Traits\Modules;

class DetailsController extends Controller
{

    use Modules;

    public function validateDetails()
    {
        $modules = $this->getModules(array('N', 'C'));
        return view('details.details', compact('modules'));
    }

}
