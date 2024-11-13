<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\DescripcionCandidatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('candidatos', CandidatoController::class)
    ->only(['index','store'])
    ->middleware(['auth', 'verified']);

Route::resource('votos',VotoController::class)
    ->only(['index','store'])
    ->middleware(['auth', 'verified']);

Route::resource('descripcion', DescripcionCandidatoController::class)
    ->only(['index','store'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
