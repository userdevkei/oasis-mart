<?php

namespace App\Http\Middleware;

use Closure;

class user
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
        if (auth()->user()->level == 'user'){
            return $next($request);
        }elseif (auth()->user()->level == 'merchant'){
            return redirect('/merchant');
        }else{
            return redirect('/admin');
        }

    }
}
