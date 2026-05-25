<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('prototype1')->name('prototype1.')->group(function () {
    Route::get('/', function () { return view('prototype1.home'); })->name('home');
    Route::get('/about', function () { return view('prototype1.about'); })->name('about');
    Route::get('/services', function () { return view('prototype1.services'); })->name('services');
    Route::get('/portfolio', function () { return view('prototype1.portfolio'); })->name('portfolio');
    Route::get('/contact', function () { return view('prototype1.contact'); })->name('contact');
});

Route::prefix('prototype2')->name('prototype2.')->group(function () {
    Route::get('/', function () { return view('prototype2.home'); })->name('home');
    Route::get('/about', function () { return view('prototype2.about'); })->name('about');
    Route::get('/services', function () { return view('prototype2.services'); })->name('services');
    Route::get('/contact', function () { return view('prototype2.contact'); })->name('contact');
});
