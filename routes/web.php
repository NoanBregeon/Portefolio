<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\ExperienceController as AdminExperienceController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Auth Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/projects/create', [AdminController::class, 'create'])->name('projects.create');
    Route::post('/projects', [AdminController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [AdminController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [AdminController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [AdminController::class, 'destroy'])->name('projects.destroy');

    Route::get('/images/{id}/delete', [AdminController::class, 'deleteImage'])->name('images.delete');

    // About Page (Setting)
    Route::get('/about', [AdminAboutController::class, 'edit'])->name('about.edit');
    Route::put('/about', [AdminAboutController::class, 'update'])->name('about.update');

    // Parcours (Experiences)
    Route::resource('experiences', AdminExperienceController::class)->except(['show']);
});

