<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;

//Route::get('/', [AuthController::class, 'login']);
//Route::post('/', [AuthController::class, 'auth_login']);


//Route::get('/maindash', function () {return view('maindash');});

// Login route
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protect the dashboard route with auth middleware
//Route::get('/maindash', function () {return view('maindash');})->middleware('auth');

// Admin Dashboard - Protected Route
Route::get('/admin/maindash', function () {
    return view('admin.maindash'); // Create this view
})->middleware('auth');

// User Dashboard - Protected Route
Route::get('/user/maindash', function () {
    return view('user.maindash'); // Create this view
})->middleware('auth');




