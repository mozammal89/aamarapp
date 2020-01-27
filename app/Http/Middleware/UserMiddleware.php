<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class UserMiddleware
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
      if(Auth::user()->role_id==2){
            if(Auth::user()->status==1)
            {

                    return $next($request);
            }else{

                return redirect()->route('login')->with('deactive','Your account is deactived ! ');
            }
        
    }else{

        return redirect()->route('login');
    }

    }
}
