<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\selfService\SelfServiceController;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('employee-selfservice/leave-requests', [SelfServiceController::class, 'employeeLeaveRequest'])->name('admin.self-service.leave-applications.leave-requests');

});
