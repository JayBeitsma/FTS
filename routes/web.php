<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusridesController;
use App\Http\Controllers\UserdashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportticketsController;
use App\Http\Controllers\AdminController;


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
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin login routes
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminController::class, 'login'])->name('login');
    Route::post('logout', [AdminController::class, 'logout'])->name('logout');
    // Admin dashboard routes
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth:admin');
    // Admin ticket routes
    Route::delete('dashboard/tickets/{id}', [AdminController::class, 'destroyTicket'])->name('dashboard.tickets.destroy')->middleware('auth:admin');
    // Admin busride routes
    Route::delete('dashboard/busrides/{id}', [AdminController::class, 'destroyBusride'])->name('dashboard.busrides.destroy')->middleware('auth:admin');
    Route::post('dashboard/busrides', [AdminController::class, 'createBusride'])->name('dashboard.busrides.create')->middleware('auth:admin');
    Route::get('dashboard/busrides/{id}/edit', [AdminController::class, 'editBusride'])->name('dashboard.busrides.edit')->middleware('auth:admin');
    Route::patch('dashboard/busrides/{id}', [AdminController::class, 'updateBusride'])->name('dashboard.busrides.update')->middleware('auth:admin');
    // Admin user routes
    Route::delete('dashboard/users/{id}', [AdminController::class, 'destroyUser'])->name('dashboard.user.destroy')->middleware('auth:admin');
});

// Admin Dashboard


require __DIR__.'/auth.php';
