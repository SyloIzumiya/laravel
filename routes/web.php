<?php

use App\Http\Controllers\AuthManager; // Importing the AuthManager controller
use Illuminate\Support\Facades\Route; // Importing the Route facade

// Route for the home page, accessible only to authenticated users
Route::get('/', function () {
    return view('welcome'); // Return the welcome view
})->name('home')->middleware('auth'); // Assigning the name 'home' and applying the 'auth' middleware

// Route for displaying the login form
Route::get('/login', [AuthManager::class,'login'])->name('login');

// Route for processing login form submission
Route::post('/login', [AuthManager::class,'loginPost'])->name('login.post');

// Route for displaying the registration form
Route::get('/registration', [AuthManager::class,'registration'])->name('registration');

// Route for processing registration form submission
Route::post('/registration', [AuthManager::class,'registrationPost'])->name('registration.post');

// Route for logging out
Route::get('/logout', [AuthManager::class,'logout'])->name('logout');

