<?php

use App\Http\Controllers\PublicSiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicSiteController::class, 'index'])->name('home');
Route::get('/que-es', [PublicSiteController::class, 'about'])->name('about');
Route::get('/beneficios', [PublicSiteController::class, 'benefits'])->name('benefits');
Route::get('/metodologia', [PublicSiteController::class, 'methodology'])->name('methodology');
Route::get('/contacto', [PublicSiteController::class, 'contact'])->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
