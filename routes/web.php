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
    })->name('services.local-removalists');

    Route::get('/graphic-design', function () {
        return view('Pages.services.graphic-design');
    })->name('services.graphic-design');

    Route::get('/seo', function () {
        return view('Pages.services.seo');
    })->name('services.seo');
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
