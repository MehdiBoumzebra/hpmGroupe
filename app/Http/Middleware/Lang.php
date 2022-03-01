<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Lang
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
        app()->setLocale($request->segment(1) ?? 'fr');
        // if(Session::has('lang')) $local = Session::get('lang');
        // else $local = 'fr';
        // \App::setLocale($local);

        return $next($request);
    }
}
