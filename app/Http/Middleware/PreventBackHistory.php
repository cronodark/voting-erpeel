<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Http\ResponseTrait;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (!Auth::check()) {
            return $response;
        }

        if ($response instanceof HttpResponse) {
            $response->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
            $response->header('Pragma', 'no-cache');
            $response->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
        }

        return $response;
    }
}
