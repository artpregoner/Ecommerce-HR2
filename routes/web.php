<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelpdeskController;
use GuzzleHttp\Middleware;


// Login route
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/maindash', [AdminController::class, 'dashboard'])->name('user.maindash');
    // Add more admin-specific routes here
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/maindash', [UserController::class, 'dashboard'])->name('user.maindash');
    //Route::get('user/helpdesk/ticket', [UserController::class, 'helpdesk'])->name('user.helpdesk.ticket');
    Route::resource('helpdesk', HelpdeskController::class);


});



