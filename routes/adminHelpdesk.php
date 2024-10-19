<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelpdeskController;
use GuzzleHttp\Middleware;



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/helpdesk/tickets', [AdminController::class, 'adminTicketList'])->name('admin.tickets');
});