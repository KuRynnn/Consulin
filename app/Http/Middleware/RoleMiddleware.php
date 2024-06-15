<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{   
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (empty($roles)) {
            $roles = [null];
        }

        if (Auth::check()) {
            foreach ($roles as $role) {
                if (Auth::user()->role == $role) {
                    return $next($request);
                }
            }
        } 

        return redirect('/');
    }
}
