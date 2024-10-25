<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\selfService\SelfServiceController;

// Routes para sa account settings ng user
Route::middleware(['auth', 'user'])->group(function () {
    // Route para ipakita ang account settings
    Route::get('user/employee-selfservice/leave-request', [SelfServiceController::class, 'show'])->name('user.self-service.leaverequest');

});
