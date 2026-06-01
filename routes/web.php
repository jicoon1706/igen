<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/booking', [ContactController::class, 'store'])->name('booking.store');
Route::get('/booking/slots', [ContactController::class, 'getBookedSlots'])->name('booking.slots');
