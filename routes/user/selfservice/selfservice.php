<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\selfService\SelfServiceController;

// Routes para sa self-service
Route::middleware(['auth', 'user'])->group(function () {
    // Route para ipakita ang self-serve
    Route::get('user/self-service/leave-request', [SelfServiceController::class, 'self_serviceLeaveReq'])->name('user.self-service.leaverequest');
    Route::get('user/self-service/schedule', [SelfServiceController::class, 'self_serviceSchedule'])->name('user.self-service.schedule');
});
