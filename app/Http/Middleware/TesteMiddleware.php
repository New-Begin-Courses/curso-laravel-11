<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TesteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);

        $value = $request->header('User-Agent');
        
        $value = (explode(' ', $value));
        $index = $value[count($value) - 2] ?? '';

        $result = str_contains($index, 'Chrome');
        
        if ($result) {
            return $next($request);
        }

        return response('Acesso negado', 403);
    }
}
