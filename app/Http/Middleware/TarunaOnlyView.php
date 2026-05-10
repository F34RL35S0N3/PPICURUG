<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TarunaOnlyView
{
    /**
     * Taruna hanya boleh akses dashboard & poin (read-only).
     * Redirect jika taruna mencoba mengakses halaman lain.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user && $user->role === 'taruna') {
            $allowedRoutes = ['dashboard', 'poin.index', 'profile.edit', 'profile.update', 'profile.destroy'];
            $currentRoute = $request->route()?->getName();

            if (!in_array($currentRoute, $allowedRoutes)) {
                abort(403, 'Taruna hanya dapat melihat dashboard dan raport poin pengasuhan.');
            }
        }

        return $next($request);
    }
}
