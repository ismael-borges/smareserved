<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/address', [AddressController::class, 'index'])->middleware(['auth'])->name('address.index');
Route::post('/address', [AddressController::class, 'register'])->middleware(['auth'])->name('address.register');
Route::get('/address/create', [AddressController::class, 'create'])->middleware(['auth'])->name('address.create');
Route::put('/address/{id}', [AddressController::class, 'update'])->middleware(['auth'])->name('address.update');
Route::get('/address/{id}', [AddressController::class, 'edit'])->middleware(['auth'])->name('address.edit');
Route::delete('/address/{id}', [AddressController::class, 'delete'])->middleware(['auth'])->name('address.delete');

Route::resource('/payment', PaymentController::class)->middleware(['auth']);

Route::get('/signature', function () {
    return view('signature');
})->middleware(['auth'])->name('signature');

require __DIR__.'/auth.php';
