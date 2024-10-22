<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrawingController;

// Landing sayfası route
Route::get('/', [DrawingController::class, 'landing'])->name('landing');

// Çizim yükleme sayfası route
Route::get('/upload', [DrawingController::class, 'index'])->name('upload');

// Çizim analiz etme route
Route::post('/analyze', [DrawingController::class, 'analyze'])->name('analyze');
