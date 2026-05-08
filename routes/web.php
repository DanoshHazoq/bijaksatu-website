<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/trainers', function () {
    return view('trainers');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', [StudentRegistrationController::class, 'create']);
Route::post('/register', [StudentRegistrationController::class, 'store']);