<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       // dd(Auth::check(),Auth::user());
       if (Auth::check()) {
        
   

        switch(Auth::user()->role){
            case 'admin':
                return redirect()->route('admin.home');
            break;

            case 'employe':
                return redirect()->route('employe.home');
            break;
            case 'client':
                    return redirect()->route('client.home');
            break;
    
            default:
                return redirect('/home');
            break;
    
        }
     }
        return $next($request);
    }
}
