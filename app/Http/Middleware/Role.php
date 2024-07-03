<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        
        if (Auth::check() && in_array(Auth::user()->role, explode('.', $role))) {
            return $next($request);
        }
        // Redirect to login or handle unauthorized access appropriately
        return redirect()->route('login');
       
        // return $next($request);
    }
}
