<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class KaryawanMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->level === 'karyawan') {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
