<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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
// Auth::routes();
Route::prefix('dashboard@_')->group(function () {
    Auth::routes();
});

Route::controller(DashboardController::class)->prefix('dashboard')->as('dashboard.')->group(function () {
// ! ||--------------------------------------------------------------------------------||
// ! ||                             to open admin home page                            ||
// ! ||--------------------------------------------------------------------------------||
    Route::get('/Portfolio', 'index')->name('index');
    Route::get('/pdf', 'PDF')->name('PDF');


});

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/', 'index')->name('index');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');