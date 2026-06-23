<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

Route::get('/Curiculum-Vitae', [CvController::class, 'index']);
