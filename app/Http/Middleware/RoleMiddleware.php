<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        /*if (!Auth::check() || Auth::user()->role !== $role) {
            return response()->json(['message' => 'No autorizado'], 403);
        }*/
        if (!$request->user() || $request->user()->role !== $role) {
             return response()->json(['message' => 'No tienes permisos'], Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }


}
