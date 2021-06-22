<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
  
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
        if(auth()->user()->is_admin == 0)
        {
            return $next($request);
        }
   
        toastr()->success('For admin User only');
        return redirect()->route('users.index');
    
    }
}
