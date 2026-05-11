<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/trainers', function () {
    return view('trainers');
})->name('trainers');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/register', [StudentRegistrationController::class, 'create'])
    ->name('register');

Route::post('/register', [StudentRegistrationController::class, 'store'])
    ->name('register.store');

Route::get('/elibrary', function () {
    return view('elibrary-home');
})->name('elibrary.home');

Route::get('/library', function () {
    return view('library');
})->name('library');