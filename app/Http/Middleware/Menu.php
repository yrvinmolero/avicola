<?php

namespace App\Http\Middleware;

use App\Models\Modulos;
use Closure;

class Menu
{
    
    public function handle($request, Closure $next)
    {
        session()->put('modules', $this->getModules());
        
        return $next($request);
    }

    private function getModules()
    {

        $modSession = array(0 => 'C', 1 => 'N');

        if(session()->get('usuID'))
            $modSession[1] = 'S';

        $modules = Modulos::where(array(['modEstado', '=', 'A'], ['modID_P', '=', 'null']))->whereIn('modSession', $modSession)->orderBy('modOrden')->get()->toArray();
        
        $modulesMap = $modules;

        $i = 0;
        array_map(function ($modul) use (&$modulesMap, &$i) {
            if(empty($modul['modRoute'])){
                $modulesMap[$i]['modHijos'] = Modulos::where('modID_P', '=', $modul['modID'])->orderBy('modOrden')->get()->toArray();
            }    
            $i++;
        }, $modules);

        return $modulesMap;
    }
}
