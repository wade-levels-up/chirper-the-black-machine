<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirpController::class, 'index']);
Route::post('/chirps', [ChirpController::class, 'store']);
Route::get('/about', [ChirpController::class, 'about']);
Route::get('chirps/{chirp}/edit', [ChirpController::class, 'edit']);
Route::patch('/chirps/{chirp}', [ChirpController::class, 'update']);
Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);

// Laravel Shorthand for the same as above:
// Route::resource('chirps', ChirpController::class)
// ->only(['store', 'edit', 'update', 'destroy']);