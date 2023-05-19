<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/showCountry', [CountryController::class, 'index']);
Route::post('/addCountry', [CountryController::class, 'store'])->name('addcountry');

Route::get('/showState', [StateController::class, 'showState']);
Route::post('/addstate', [StateController::class, 'store'])->name('addstate');

Route::get('/showCity', [CityController::class, 'index']);
Route::post('/addCity', [CityController::class, 'store'])->name('addcity');
