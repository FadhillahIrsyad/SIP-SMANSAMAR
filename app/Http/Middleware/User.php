<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect()->route('Login');
        }

        if(Auth::user()->role == 'Super Admin'){
            return redirect()->route('Dashboard');
        }

        if(Auth::user()->role == 'Admin'){
            return redirect()->route('Dashboard');
        }

        if(Auth::user()->role == 'User'){
            return $next($request);
        }
    }
}