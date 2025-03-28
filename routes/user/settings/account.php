<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Settings\AccountSettingsController;

// Routes para sa account settings ng user
Route::middleware(['auth', 'user'])->group(function () {
    // Route para ipakita ang account settings
    Route::get('user/account/settings', [AccountSettingsController::class, 'show'])->name('user.account.settings');

    // // Route para i-update ang account information
    // Route::post('account/settings/update', [AccountSettingsController::class, 'update'])->name('user.account.settings.update');

    // // Route para baguhin ang password
    // Route::post('account/settings/change-password', [AccountSettingsController::class, 'changePassword'])->name('user.account.settings.change-password');

    // // Route para i-update ang notification preferences (optional)
    // Route::post('account/settings/notifications', [AccountSettingsController::class, 'updateNotifications'])->name('user.account.settings.notifications');
});
