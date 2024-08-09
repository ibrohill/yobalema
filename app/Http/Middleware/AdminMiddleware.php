<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        return redirect('/'); // Redirigez l'utilisateur non autorisé vers la page d'accueil ou une autre page appropriée.
    }
}

