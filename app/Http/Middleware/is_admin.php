<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class is_admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
        }
        else{
            print("Session Time Out Please Login Again");exit;
        }

        return redirect('login')->with('error',"You don't have admin access.");
        // return $next($request);
    }
}
