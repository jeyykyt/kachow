<?php

use App\Http\Controllers\MakeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/', [MakeController::class, 'index'])->name('make.index');
Route::get('/makes/{make}/years', [MakeController::class, 'showYears']) ->name('make.years');
Route::get('/makes/{make}/years/{year}/models', [MakeController::class, 'showModels'])->name('make.models');
Route::get(
    '/makes/{make}/years/{year}/models/{model}/trims',
    [MakeController::class, 'showTrims']
)->name('make.trims');

Route::get(
    '/makes/{make}/years/{year}/models/{model}/trims/{trim}/own',
    [MakeController::class, 'showOwn']
)->name('make.own');
Route::get(
    '/makes/{make}/years/{year}/models/{model}/trims/{trim}/own',
    [MakeController::class, 'showOwn']
)->name('make.own');

// STEP 4.6: Handle the form POST to save a vehicle
Route::post(
    '/vehicles/store',
    [VehicleController::class, 'store']
)->name('vehicles.store');

Route::get('/quote/details', [QuoteController::class, 'showDetailsForm'])->name('quote.details');
Route::post('/quote/details', [QuoteController::class, 'saveDetails'])->name('quote.save');
