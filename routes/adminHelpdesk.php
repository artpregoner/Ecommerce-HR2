<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelpdeskController;
use GuzzleHttp\Middleware;



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/helpdesk/tickets', [AdminController::class, 'adminTicketList'])->name('admin.helpdesk.tickets');
    // Route for the admin to view all tickets
    Route::delete('admin/helpdesk/{ticket}', [AdminController::class, 'adminDestroy'])->name('admin.helpdesk.destroy');
    Route::get('admin/helpdesk/view', [HelpdeskController::class, 'adminticketView'])->name('admin.helpdesk.view');
});