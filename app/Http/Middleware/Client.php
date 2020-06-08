<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Client
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
    
        if (Auth::user()->role == "client") {
            return $next($request);
        }
    
        return redirect()->route('login');
        

        
    }
}
