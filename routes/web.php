<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ThanksController;

use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/agradecimentos', [ThanksController::class, 'index'])->name('thanks');

Route::fallback(function () {
    return redirect()->route('home');
});
