<?php

use App\Http\Controllers\DriverController;
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
)
    ->where('trim', '.*')   // ← this allows “{trim}” to contain “%2F” or any characters
    ->name('make.own');

// STEP 4.6: Handle the form POST to save a vehicle
Route::post(
    '/vehicles/store',
    [VehicleController::class, 'store']
)->name('vehicles.store');

Route::get('/quote/details', [QuoteController::class, 'showDetailsForm'])->name('quote.details');
Route::post('/quote/details', [QuoteController::class, 'saveDetails'])->name('quote.save');


Route::post('/quote/store-insured', [QuoteController::class, 'storeInsured'])
    ->name('quote.storeInsured');

// 2) “Do you own a house?” step
Route::post('/quote/store-own-house', [QuoteController::class, 'storeOwnHouse'])
    ->name('quote.storeOwnHouse');

// DRIVER

Route::post('/driver/store-gender', [DriverController::class, 'storeGender'])
    ->name('driver.storeGender');

Route::post('/driver/store-birthdate', [DriverController::class, 'storeBirthdate'])
    ->name('driver.storeBirthdate');

// 3) Step 3: “Driver Details” (first name, last name, served military, relationship)
Route::post('/driver/store-details', [DriverController::class, 'storeDriverDetails'])
    ->name('driver.storeDetails');

Route::get('/quote1', function () {
    return view('quote');
})  ->name('quote1');
