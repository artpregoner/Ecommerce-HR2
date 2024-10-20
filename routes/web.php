<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Middleware;

// Login route
// Root route that checks if the user is already logged in
Route::get('/', function () {
    if (Auth::check()) {
        // Redirect based on user role
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.maindash');
        } else {
            return redirect()->route('user.maindash');
        }
    }
    return view('auth.login'); // Show login form if not authenticated
})->name('login');

Route::post('/', [AuthController::class, 'login'])->name('login.post');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/maindash', [AdminController::class, 'dashboard'])->name('admin.maindash');
    // Workforce Analytics
    Route::get('workforce/employee-metrics', [AdminController::class, 'employeeMetrics'])->name('employeeMetrics');
    Route::get('workforce/skill-gap', [AdminController::class, 'skillGap'])->name('skillGap');
    Route::get('workforce/turnover-hiring', [AdminController::class, 'turnoverHiring'])->name('turnoverHiring');

});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/maindash', [UserController::class, 'dashboard'])->name('user.maindash');
    Route::get('schedule', [UserController::class, 'self_service'])->name('user.self-service.schedule');
});

require __DIR__ . '/adminHelpdesk.php';
require __DIR__ . '/userHelpdesk.php';



