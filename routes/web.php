<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Admin Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Services
    Route::get('/services/{id}/edit', [AdminController::class, 'editService'])->name('admin.services.edit');
    Route::put('/services/{id}', [AdminController::class, 'updateService'])->name('admin.services.update');
    
    // Team
    Route::get('/team/{id}/edit', [AdminController::class, 'editTeam'])->name('admin.team.edit');
    Route::put('/team/{id}', [AdminController::class, 'updateTeam'])->name('admin.team.update');
    
    // Pricing Plans
    Route::get('/plans/{id}/edit', [AdminController::class, 'editPlan'])->name('admin.plans.edit');
    Route::put('/plans/{id}', [AdminController::class, 'updatePlan'])->name('admin.plans.update');
});

// Contact Message Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/messages', [ContactController::class, 'messages'])->name('contact.messages');
    Route::post('/admin/messages/{id}/read', [ContactController::class, 'markAsRead'])->name('contact.mark-read');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
