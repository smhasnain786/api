<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\AuthDomain; 
class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $domain_name = $request->route('domain'); // Assuming the API key is passed in the route parameters

        // Check if the API key exists in the database
        $validdomain_name = AuthDomain::where('domain_name', $domain_name)->exists();

        if (!$validdomain_name) {
            return response()->json(['error' => 'notverified'], 401);
        }

        return $next($request);
    }
}
