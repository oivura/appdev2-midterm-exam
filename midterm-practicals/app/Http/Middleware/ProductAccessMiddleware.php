<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $validToken =  env('API_TOKEN');

       //CHECK IF THE REQUEST CONTAINS A TOKEN
       $token = $request->header('Authorization');
       if (!token) {
            return response()->json(['error' => 'Token is missing.'], 401);
       }

       //Compairing TOKEN in the request with the valid token

       if ($token !== $validToken) {
            return response()->json(['error' => 'Token is invalid'], 401);
       }

       return $next($request);
    }
}
