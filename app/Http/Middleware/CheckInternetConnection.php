<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckInternetConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!$this->isConnected()) {
        //     // Optionnel : rediriger vers une page spécifique ou afficher un message d'erreur
        //     return response()->json(['error' => 'No internet connection'], 503);
        // }
        return $next($request);
    }
}
