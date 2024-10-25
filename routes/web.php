<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use GuzzleHttp\Middleware;

// Add your dashboard routes here, protected by authentication middleware:
Route::middleware('auth')->group(function () {
    Route::get('admin/maindash', function () {
        return 'Admin Dashboard'; // Your actual admin dashboard view
    })->name('admin.maindash');

    Route::get('user/maindash', function () {
        return 'User Dashboard'; // Your actual user dashboard view
    })->name('user.maindash');
});

// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/maindash', [AdminController::class, 'dashboard'])->name('admin.maindash');
    // Workforce Analytics
    Route::get('workforce/employee-metrics', [AdminController::class, 'employeeMetrics'])->name('employeeMetrics');
    Route::get('workforce/skill-gap', [AdminController::class, 'skillGap'])->name('skillGap');
    Route::get('workforce/turnover-hiring', [AdminController::class, 'turnoverHiring'])->name('turnoverHiring');
    // claims & reimbursement ui only
    Route::get('claims&reimbursement/requests', [AdminController::class, 'adminReimbursement'])->name('admin.reimbursiment.requests');
    // claims & reimbursement ui only
    Route::get('self-service/employee-profile', [AdminController::class, 'employeeManagement'])->name('admin.self-service.employeeList');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/maindash', [UserController::class, 'dashboard'])->name('user.maindash');
    Route::get('user/schedule', [UserController::class, 'self_service'])->name('user.self-service.schedule');
    // reimbursement
    Route::get('user/claims&reimbursement/requests', [UserController::class, 'ReimbursementRequests'])->name('reimbursement.requests');
    Route::get('user/claims&reimbursement/create', [UserController::class, 'ReimbursementCreate'])->name('reimbursement.create');
});

require __DIR__ . '/adminHelpdesk.php';
require __DIR__ . '/userHelpdesk.php';
require __DIR__ . '/loginRoute.php';
//for employee (user)
require __DIR__.'/user/settings/account.php';
require __DIR__.'/user/selfservice/selfservice.php';


//for hrmanager/admin
require __DIR__.'/admin/selfservice/selfservice.php';
require __DIR__.'/admin/settings/account.php';



