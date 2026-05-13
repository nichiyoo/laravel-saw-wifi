<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnvirontmentCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     * @param mixed $environtments
     */
    public function handle(Request $request, Closure $next, mixed $environtments): Response
    {
        if (!app()->environment($environtments)) return redirect()->route('dashboard');
        return $next($request);
    }
}
