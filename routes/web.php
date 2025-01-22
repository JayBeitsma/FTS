<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Main
Route::get('/', function () {
    return view('pages/index');
})->name ('index');

// Pages
Route::get('/contact', function () {
    return view('pages/contact');
})->name ('contact');

Route::get('/festivals', function () {
    return view('pages/festivals');
})->name ('festivals');

Route::get('/rijsoverzicht', function () {
    return view('pages/rijsoverzicht');
})->name ('rijsoverzicht');





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
