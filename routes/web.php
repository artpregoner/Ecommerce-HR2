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
    Route::get('admin/maindash', [AdminController::class, 'dashboard'])->name('admin.maindash');
    Route::get('admin/helpdesk/tickets', [AdminController::class, 'adminTicketList'])->name('admin.tickets');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/maindash', [UserController::class, 'dashboard'])->name('user.maindash');
    Route::get('schedule', [UserController::class, 'self_service'])->name('user.self-service.schedule');
    Route::get('user/helpdesk/tickets', [HelpdeskController::class, 'index'])->name('user.helpdesk.ticket');
    Route::get('user/helpdesk/create', [HelpdeskController::class, 'create'])->name('helpdesk.create');
    Route::post('user/helpdesk/tickets', [HelpdeskController::class, 'store'])->name('helpdesk.store');
    Route::get('user/helpdesk/{ticket}/edit', [HelpdeskController::class, 'edit'])->name('helpdesk.edit');
    Route::put('user/helpdesk/{ticket}', [HelpdeskController::class, 'update'])->name('helpdesk.update');
    Route::delete('/helpdesk/{ticket}', [HelpdeskController::class, 'destroy'])->name('helpdesk.destroy');


});



