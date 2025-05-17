<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryMddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //curriculum role rules
        $array=[
            'Bangladesh',
            'America',
            'Canada',
            'Africa',
        ];
        if(in_array($request->country, $array)){
            return $next($request);
        }
        return redirect()->to('/');
    }
}
