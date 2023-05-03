<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if (Auth::check()) {
            if ($user->role == 1 && $request->routeIs('user.murid.index')) {
                return $next($request);
            } else if ($user->role == 2 && $request->routeIs('user.admin.index')) {
                return $next($request);
            } else {
                return redirect()->route('user.murid.index')->withErrors([
                    'error' => 'You are already logged in.',
                ]);
            }
        } else {
            return $next($request);
        }
    }
}
