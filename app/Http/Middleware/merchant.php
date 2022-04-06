<?php

namespace App\Http\Middleware;

use Closure;

class merchant
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
        if (auth()->user()->level == 'merchant'){
            return $next($request);
        }elseif (auth()->user()->level ==  'admin'){
            return redirect('/admin');
        }else{
            return redirect('/user');
        }

    }
}
