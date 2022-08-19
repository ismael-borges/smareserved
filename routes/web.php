<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignatureController;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\AddressController;
use \App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/address', AddressController::class);
    Route::resource('/payment', PaymentController::class);
    Route::resource('/signature', SignatureController::class);
});

require __DIR__.'/auth.php';
