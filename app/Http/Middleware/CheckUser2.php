<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    //  If user already logged in, redirect to home
    if (session()->has('user_id')) {
        return redirect()->route('home');
    }
    //  If not logged in, allow to continue (show login/register)
    return $next($request);

    }
}
