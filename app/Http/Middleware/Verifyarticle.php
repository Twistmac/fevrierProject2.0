<?php

namespace App\Http\Middleware;
use App\Blog;
use Closure;

class Verifyarticle
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
        $slug = $request->route('slug');
        $decrypt = preg_split("/-/", $slug);
        $_id = preg_replace("/artcl/","",$decrypt[0]);
        if(!empty(Blog::where('id',intval($_id))->get()->toArray()))
        {
            $request->attributes->add(['blog_id' => intval($_id)]);
            return $next($request);
        }
        else
            return abort('500');
    }
}
