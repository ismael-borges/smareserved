<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/address', function () {
    return view('formaddress');
})->middleware(['auth'])->name('address');

Route::get('/payment', function () {
    return view('payment');
})->middleware(['auth'])->name('payment');

Route::get('/signature', function () {
    return view('signature');
})->middleware(['auth'])->name('signature');

require __DIR__.'/auth.php';
