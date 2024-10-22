<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Check the role of the logged-in user and redirect accordingly
            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->intended('admin/maindash');
            } elseif ($role === 'user') {
                return redirect()->intended('user/maindash');
            }
        }
        // Return back to login page with error message if credentials are wrong
        return redirect()->back()->with('error', 'Invalid Email or Password');
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}