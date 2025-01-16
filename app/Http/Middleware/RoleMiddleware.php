<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
            if ($user->role !== $role) {
                return redirect()->route('login.form')->with('error', 'Access Denied.');
            }
            return $next($request);
        }
        return redirect()->route('login.form')->with('error', 'You must log in first.');
    }
}
