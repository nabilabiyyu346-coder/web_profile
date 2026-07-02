<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Admin\PortofolioControllerAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home');

Route::get('/CV', function () {
    return view('CV');
});

Route::get('/dashboard', [PortofolioControllerAdmin::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');
Route::delete('/dashboard/portfolio/{id}', [PortofolioControllerAdmin::class, 'destroy'])
    ->middleware(['auth', 'verified'])->name('portfolio.destroy');
Route::get('/dashboard/portfolio/create', [PortofolioControllerAdmin::class, 'create'])
    ->middleware(['auth', 'verified'])->name('portfolio.create');
Route::post('/dashboard/portfolio/store', [PortofolioControllerAdmin::class, 'store'])
    ->middleware(['auth', 'verified'])->name('portfolio.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
