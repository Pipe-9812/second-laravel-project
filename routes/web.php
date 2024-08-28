<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ----------------------------------------------------------------

Route::view('home', 'home')->name('home');

Route::resource('cursos', CursoController::class)->parameters(['cursos' => 'course'])->middleware(['auth', 'verified'])->names('courses');

Route::middleware('auth')->controller(ContactUsController::class)->group(function() {
    Route::get('contactenos', 'index')->name('contact-us.index');
    Route::post('contactenos', 'store')->name('contact-us.store');
});

require __DIR__.'/auth.php';
