<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Auth;

class CheckRole
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
        
        if(Auth::user()->role != '1'){
            return redirect('/userdashboard');
        }
        return $next($request);
    }
}
