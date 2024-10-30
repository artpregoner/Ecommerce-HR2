<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Workforce\WorkforceController;

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('workforce/employee-metrics', [WorkforceController::class, 'employeeMetrics'])->name('employeeMetrics');
    Route::get('workforce/skill-gap', [WorkforceController::class, 'skillGap'])->name('skillGap');
    Route::get('workforce/turnover-hiring', [WorkforceController::class, 'turnoverHiring'])->name('turnoverHiring');

});