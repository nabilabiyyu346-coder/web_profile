<?php

use App\Http\Middleware\TrackVisitor;
use Illuminate\Support\Facades\Route;

Route::middleware([TrackVisitor::class])->group(function () {
    
    Route::get('/', function () {
        return view('home');
    })->name('home');

});
