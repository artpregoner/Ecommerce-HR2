<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelpdeskController;
use GuzzleHttp\Middleware;


Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/helpdesk/tickets', [HelpdeskController::class, 'index'])->name('user.helpdesk.ticket');
    Route::get('user/helpdesk/create', [HelpdeskController::class, 'create'])->name('helpdesk.create');
    Route::post('user/helpdesk/tickets', [HelpdeskController::class, 'store'])->name('helpdesk.store');
    Route::get('user/helpdesk/{ticket}/edit', [HelpdeskController::class, 'edit'])->name('helpdesk.edit');
    Route::put('user/helpdesk/{ticket}', [HelpdeskController::class, 'update'])->name('helpdesk.update');
    Route::delete('/helpdesk/{ticket}', [HelpdeskController::class, 'destroy'])->name('helpdesk.destroy');
});