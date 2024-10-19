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
        //dd(Hash::make('admin12345678'));
        //dd(Hash::make('user12345678'));
        return view('Auth.login');
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

        return redirect()->back()->with('error', "Please enter current Email and Password");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}