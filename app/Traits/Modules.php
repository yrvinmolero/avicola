<?php

namespace App\Traits;

use App\Models\Modulos;

trait Modules {

    public function getModules($modSession) {

        $modules = Modulos::where('modEstado', '=', 'A')->whereIn('modSession', $modSession)->get()->toArray();
        return $modules;
    }

}
