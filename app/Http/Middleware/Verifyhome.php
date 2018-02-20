<?php

namespace App\Http\Middleware;

use Closure;

class Verifyhome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $accept = ['Résidentiel','Foncier','Commercial','Industriel'];
        $slug = $request->route('str');
        foreach($accept as $accepts)
        {
            if($accepts == $slug)
            {
                $request->attributes->add(['str' => $slug]);
                return $next($request);
            }    
        }
       
    }

}
