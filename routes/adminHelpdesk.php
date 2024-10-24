<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\Admin\AdminController;
use GuzzleHttp\Middleware;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/helpdesk/tickets', [AdminController::class, 'adminTicketList'])->name('admin.helpdesk.tickets');
    // Route for the admin to view all tickets
    Route::delete('admin/helpdesk/{ticket}', [AdminController::class, 'adminDestroy'])->name('admin.helpdesk.destroy');
    Route::get('admin/helpdesk/view', [HelpdeskController::class, 'adminticketView'])->name('admin.helpdesk.view');
    Route::post('/admin/helpdesk/ticket/{id}/reply', [HelpdeskController::class, 'reply'])->name('ticket.reply');


    Route::get('/admin/helpdesk/{ticket}', [AdminController::class, 'showReply'])->name('admin.helpdesk.show');
    Route::post('/admin/helpdesk/{ticket}/reply', [AdminController::class, 'store'])->name('admin.helpdesk.reply');
    Route::get('/admin/helpdesk/{ticket}/replies', [AdminController::class, 'fetchReplies'])->name('admin.helpdesk.replies');

    



});