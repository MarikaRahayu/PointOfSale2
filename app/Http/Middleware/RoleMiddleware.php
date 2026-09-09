<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(
        Request $request,
        Closure $next,
        ...$roles
    ): Response {

        // Jika belum login
        if (!$request->user()) {
            return redirect()->route('login');
        }

        // Ambil role user
        $userRole = strtolower(
            $request->user()->role?->name ?? ''
        );

        // Ubah semua role yang ada di route menjadi huruf kecil
        $allowedRoles = array_map(
            'strtolower',
            $roles
        );

        // Jika role tidak sesuai
        if (!in_array($userRole, $allowedRoles)) {
            abort(403, 'Akses ditolak');
        }

        return $next($request);
    }
}