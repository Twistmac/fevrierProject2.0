<?php

namespace App\Http\Middleware;
use App\Produit;
use Closure;

class Verificationproduit
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
        $pageId = $request->route('slug');
        $chaine = preg_split('/-/', $pageId);
        $_id = strtoupper($chaine[0]);
        $value = Produit::where('idproduit',$_id)->first();
        if($value)
        {
            $request->attributes->add(['product_id' => $value->idproduit]);
            return $next($request);
        }
        else
            return response('Unauthorized.','401');
    }
}
