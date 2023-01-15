<?php

declare(strict_types=1);

namespace Modules\Common\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRole
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->hasRoleAdmin()) {
            return response()->view('admin-dashboard');
        }

        return $next($request);
    }
}
