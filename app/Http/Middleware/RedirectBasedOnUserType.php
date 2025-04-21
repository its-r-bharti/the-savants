<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnUserType
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($usertype === 'user') {
                return redirect()->route('student.dashboard');
            }
        }

        return $next($request);
    }
}

