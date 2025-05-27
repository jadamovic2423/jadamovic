<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, "homepage"])->name("home");
Route::get('/o-nama', [PageController::class, "onama"])->name("o-nama");
Route::get('/katalog', [BlogController::class, "katalogBug"])->name("katalog");
Route::get('/zahtev/{id}', [BlogController::class, "zahtev"])->name("zahtev");


Route::get('/dashboard', function () {
    return view ('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';