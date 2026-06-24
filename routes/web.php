<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', [homeController::class, 'index'])->name('home');

Route::get('/CV', function () {
    return view('CV');
});
