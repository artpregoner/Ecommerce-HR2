<?php

// app/Http/Middleware/Authenticate.php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Redirect to login page if the user is not authenticated
            return route('login');
        }
    }
}
