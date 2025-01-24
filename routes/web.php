<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusridesController;
use Illuminate\Support\Facades\Route;

// Main
Route::get('/', function () {
    return view('pages/index');
})->name ('index');

// Pages
// Contact page
Route::get('/contact', function () {
    return view('pages/contact');
})->name ('contact');

// Busrides page
Route::get('/busrides', [BusridesController::class, 'index'])->name('busrides');

Route::resource('Busride', BusridesController::class)
    ->only(['index', 'show']);

// About us page
Route::get('/about', function () {
    return view('pages/about');
})->name ('about');





// Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
