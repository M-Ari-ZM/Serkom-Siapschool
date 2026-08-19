<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AppSettingController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/about', [LandingController::class, 'about'])->name('about');

Route::post('/demo-gratis', [LandingController::class, 'store'])->name('lead.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::delete('leads/{lead}', [DashboardController::class, 'destroy'])->name('leads.destroy');
    Route::resource('features', FeatureController::class)->except(['show']);
    Route::resource('faqs', FaqController::class)->except(['show']);
    Route::get('settings', [AppSettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [AppSettingController::class, 'update'])->name('settings.update');
    Route::delete('settings/screenshots', [AppSettingController::class, 'deleteScreenshot'])->name('settings.screenshots.destroy');
});

require __DIR__ . '/auth.php';
