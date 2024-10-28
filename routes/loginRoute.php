<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

// Login para sa Admin 
Route::get('/secure/admin', [AuthController::class, 'adminLoginPanel'])->name('auth.adminLoginPanel');

// Route para ipakita ang login form (GET request)
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route para i-handle ang login submission (POST request)
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Root route that checks if the user is already logged in

// Route for the root URL
Route::get('/', function () {
    if (Auth::check()) {
        // Redirect based on user role
        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.maindash' : 'user.maindash');
    }
    return view('auth.login'); // Show login form if not authenticated
})->name('root');

// Route for the login page
Route::get('/login', function () {
    if (Auth::check()) {
        // Redirect based on user role
        return redirect()->route(Auth::user()->role === 'admin' ? 'admin.maindash' : 'user.maindash');
    }
    return view('auth.login'); // Show login form if not authenticated
})->name('login');