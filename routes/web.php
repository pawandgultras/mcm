<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.home');
});

Route::get('/about', function () {
    return view('Pages.about');
});

Route::get('/contact', function () {
    return view('Pages.contact');
});

Route::group(['prefix' => 'services'], function () {
    Route::get('/local-removalists', function () {
        return view('Pages.services.local-removalists');

    })->name('local-removalists');

    Route::get('/removalists-melbourne', function () {
        return view('Pages.services.removalists-melbourne');
    })->name('removalists-melbourne');

    Route::get('/house-removalists', function () {
        return view('Pages.services.house-removalists');
    })->name('house-removalists');

    Route::get('/office-removalists', function () {
        return view('Pages.services.office-removalists');
    })->name('office-removalists');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
