<?php

namespace App\Http\Middleware;

use Closure;

class checkRole
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
        if(auth()->user()){
            if(auth()->user()->isAdmin())
            {
                return $next($request);
            }
            else
            {
                return redirect("home");
            }
        }else{
            return redirect("/login");
        }
    }
}
