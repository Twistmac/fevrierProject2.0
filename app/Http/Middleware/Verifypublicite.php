<?php

namespace App\Http\Middleware;

use App\Publicite;

use Closure;

class Verifypublicite
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
        $datas = Publicite::where('nompage',$request->route('name'))->first(['nompage']);

        if( !is_null($datas) )
            return $next($request);
        else
            return redirect()->route('registre.publicite');
    }
}
