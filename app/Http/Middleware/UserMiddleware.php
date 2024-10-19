<?php

// app/Http/Middleware/EmployeeMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'user') { 
            return $next($request);
        }
        
        // Redirect to a suitable page if the user is not a user
        // return redirect()->route('login');
        return abort(403, 'Unauthorized action.'); // Change this to where you want to redirect
    }
}