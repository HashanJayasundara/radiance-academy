<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events/store', [EventController::class, 'store'])->name('events.store');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact.form');
Route::post('/contact-us', [HomeController::class, 'submitContact'])->name('contact.submit');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Admin Routes
    Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/classes/create', [ClassController::class, 'create'])->name('classes.create');
        Route::post('/classes/store', [ClassController::class, 'store'])->name('classes.store');
        Route::get('/classes/manage', [ClassController::class, 'manage'])->name('classes.manage');
        Route::get('/events/manage', [EventController::class, 'manage'])->name('events.manage');
    });

    // Student Routes
    Route::middleware(['student'])->prefix('student')->name('student.')->group(function () {
        Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
        Route::get('/classes', [StudentController::class, 'classes'])->name('classes');
    });
});
