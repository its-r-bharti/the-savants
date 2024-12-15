<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingPlanController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/feature', function () {
    return view('home.feature');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/ourwork', function () {
    return view('home.ourwork');
});


//school

Route::get('/school', function () {
    return view('school.homepage');
});

Route::get('/template', function () {
    return view('school.template');
});


Route::get('/schoolPrice', function () {
    return view('school.pricing');
});


//business

Route::get('/office', function () {
    return view('business.homepage2');
});

Route::get('/btemplate', function () {
    return view('business.template');
});


Route::get('/bPrice', function () {
    return view('business.pricing');
});


//webapp

Route::get('/webapp', function () {
    return view('webapp.homepage');
});

Route::get('/web', function () {
    return view('webapp.web');
});

Route::get('/app', function () {
    return view('webapp.app');
});

Route::get('/maintainance', function () {
    return view('webapp.maintainance');
});



//shop

Route::get('/shop', function () {
    return view('shop.homepage');
});

//hardware
Route::get('/hardware', function () {
    return view('hardware.homepage');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');



Route::post('/send-standard-plan', [PricingPlanController::class, 'sendStandardPlan']);
Route::post('/send-professional-plan', [PricingPlanController::class, 'sendProfessionalPlan']);

require __DIR__.'/auth.php';

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return response()->json(['message' => 'Caches cleared successfully!']);
});