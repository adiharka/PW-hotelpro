<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\RSVPController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
        Route::resource('admin/bookings', BookingController::class);
        Route::resource('admin/rooms', RoomController::class);
        Route::resource('admin/types', TypeController::class);
    });

    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
        Route::resource('user/web', WebController::class);
        Route::resource('user/katalog', CatalogueController::class);
        Route::get('user/booking', [UserController::class, 'booking'])->name('user.booking');
        // Route::post('user/booking', [UserController::class, 'storeBooking'])->name('user.booking.store');
        // Route::get('detail', [CatalogueController::class, 'list'])->name('katalog.list');
        Route::resource('user/rsvp', RSVPController::class);
    });

    Route::get('/logout', function () {
        Auth::logout();
        redirect('/');
    });
});
