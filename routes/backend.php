<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\DashboardController;

Route::name('backend.')->group(function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Posts
    Route::resource('posts', PostController::class);

    // Events
    Route::resource('events', EventController::class);

    // Members
    Route::resource('members', MemberController::class);

    // Settings
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('', [SettingController::class, 'index'])->name('index');
        Route::put('update_site', [SettingController::class, 'update_site'])->name('update_site');
        Route::put('update_user', [SettingController::class, 'update_user'])->name('update_user');
    });

    // Logout
    Route::get('logout', [AuthController::class, 'do_logout'])->name('logout');
});
