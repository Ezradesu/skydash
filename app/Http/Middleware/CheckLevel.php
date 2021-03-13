<?php

namespace App\Http\Middleware;

use Closure;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $privilege)
    {
        
        if($privilege == 'Administrator' && auth()->user()->role == 'Administrator'){
            return $next($request);
        }else if($privilege == 'Author' && auth()->user()->role == 'Author'){       
            return $next($request);
        }else if($privilege == 'Pengunjung' && auth()->user()->role == 'Pengunjung'){       
            return $next($request);
        }else if($privilege == "Administrator&Author"){
            if(auth()->user()->role == 'Administrator'){
                return $next($request);
            }else if(auth()->user()->role == 'Author'){
                return $next($request);
            }
        }
          
        return back();
    }
}
