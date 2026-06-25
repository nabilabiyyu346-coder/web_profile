<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Models\User;
use App\Models\appTeks;
use App\Models\appImage;


Route::get('/', function () {
    return view('welcome', [
        'user'   => User::first(),
        'teks'   => appTeks::all(),
        'images' => appImage::all(),
    ]);
});

Route::get('/cv', [CvController::class, 'index'])->name('cv.index');