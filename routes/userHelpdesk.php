<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\User\UserController;
use GuzzleHttp\Middleware;


Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/helpdesk/tickets', [HelpdeskController::class, 'index'])->name('user.helpdesk.ticket');
    Route::get('user/helpdesk/create', [HelpdeskController::class, 'create'])->name('helpdesk.create');
    Route::post('user/helpdesk/tickets', [HelpdeskController::class, 'store'])->name('helpdesk.store');
    Route::get('user/helpdesk/{ticket}/edit', [HelpdeskController::class, 'edit'])->name('helpdesk.edit');
    Route::put('user/helpdesk/{ticket}', [HelpdeskController::class, 'update'])->name('helpdesk.update');
    Route::delete('/helpdesk/{ticket}', [HelpdeskController::class, 'destroy'])->name('helpdesk.destroy');
    Route::get('user/helpdesk/view', [HelpdeskController::class, 'userticketView'])->name('user.helpdesk.view');

    Route::get('/user/helpdesk/{ticket}', [UserController::class, 'show'])->name('user.helpdesk.show');
    Route::get('/user/helpdesk/{ticket}/replies', [UserController::class, 'fetchReplies'])->name('user.helpdesk.replies');
    Route::post('/user/helpdesk/{ticketId}/reply', [UserController::class, 'store'])->name('ticket.reply.store');




});