<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

Route::get('/', function () {
    return view('Pages.home');
});

Route::get('/about', function () {
    return view('Pages.about-us');
})->name('about');

Route::get('/contact', function () {
    return view('Pages.contact-us');
})->name('contact');

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

    Route::get('/furniture-removalists', function () {
        return view('Pages.services.furniture-removalists');
    })->name('furniture-removalists');
    
    Route::get('/antique-removalists', function () {
        return view('Pages.services.antique-removalists');
    })->name('antique-removalists');

    Route::get('/commercial-removalists', function () {
        return view('Pages.services.commercial-removalists');
    })->name('commercial-removalists');

    Route::get('/flat-removalists', function () {
        return view('Pages.services.flat-removalists');
    })->name('flat-removalists');

    Route::get('/hotel-removalists', function () {
        return view('Pages.services.hotel-removalist');
    })->name('hotel-removalists');

    Route::get('/packing-services', function () {
        return view('Pages.services.packing-services');
    })->name('packing-services');

    Route::get('/piano-removalists', function () {
        return view('Pages.services.piano-removalists');
    })->name('piano-removalists');

    Route::get('/retirement-moving', function () {
        return view('Pages.services.retirement-moving');
    })->name('retirement-moving');

    Route::get('/school-removalists', function () {
        return view('Pages.services.school-removalists');
    })->name('school-removalists');
    

});

Route::get('/enquiry/address', [formController::class, 'showAddressForm'])->name('enquiry');
Route::get('/enquiry/property', [formController::class, 'submitAddressForm'])->name('property.form');
Route::get('/enquiry/date', [formController::class, 'showDateForm'])->name('date.form');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
