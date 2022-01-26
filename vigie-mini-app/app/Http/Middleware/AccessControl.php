<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessControl
{
    public function handle(Request $request, Closure $next)
    {
        if(session()->get('username') === null || session()->get('id') === null)
            return redirect()->route('Login');
        
        return $next($request);
    }
}
