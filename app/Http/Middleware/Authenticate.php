<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate 
{
    public function handle($request, Closure $next)
    {

        if(empty(session()->get('usuID')))
            return redirect('/login');          
            
        return $next($request);
    }
}
