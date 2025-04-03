<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusridesController;
use App\Http\Controllers\UserdashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportticketsController;


// Main
Route::get('/', function () {
    return view('pages/index');
})->name('index');

// Pages
// Contact page
Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::resource('supporttickets', SupportticketsController::class);

// Busrides page
Route::get('/busrides', [BusridesController::class, 'index'])->name('busrides.index');
Route::get('/busrides/{id}', [BusridesController::class, 'show'])->name('busrides.show');
Route::post('/busrides/{id}/tickets', [BusridesController::class, 'buyTicket'])->name('busrides.tickets.store');

// Ticket routes
Route::resource('tickets', TicketController::class);

// About us page
Route::get('/about', function () {
    return view('pages/about');
})->name('about');





// Breeze
Route::get('/dashboard', [UserdashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');
Route::delete('/dashboard/tickets/{id}', [UserdashboardController::class, 'destroy'])
    ->middleware(['auth', 'verified'])->name('dashboard.tickets.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes


require __DIR__.'/auth.php';
