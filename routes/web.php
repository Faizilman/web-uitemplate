<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/pricing&faq', function () {
    return view('page.pricing');
})->name('page.pricing&faq');

Route::get('/docs/installation/laravel', function () {
    return view('docs.getting-started.installation.laravel');
})->name('getting-started.installation.laravel');

Route::get('/docs/quick-started', function () {
    return view('docs.getting-started.quick-start.index');
})->name('getting-started.quick-start');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/docs.php';
=======
use App\Http\Controllers\DocsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/docs/1.x/{folder}/{page}', [DocsController::class, 'show'])
    ->name('docs.show');

require __DIR__.'/auth.php';
>>>>>>> master
