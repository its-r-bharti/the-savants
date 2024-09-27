<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/feature', function () {
    return view('home.feature');
});

Route::get('/school', function () {
    return view('school.homepage');
});

Route::get('/template', function () {
    return view('school.template');
});


Route::get('/schoolPrice', function () {
    return view('school.pricing');
});

Route::get('/office', function () {
    return view('business.homepage');
});

Route::get('/btemplate', function () {
    return view('business.template');
});


Route::get('/bPrice', function () {
    return view('business.pricing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
