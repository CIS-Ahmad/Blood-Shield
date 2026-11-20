<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\DonationController;
Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/donors', [DonorController::class, 'index'])
    ->name('donors.index');

Route::get('/donors/create', [DonorController::class, 'create'])
    ->name('donors.create');

Route::get('/donors/{id}', [DonorController::class, 'show'])
    ->name('donors.show');

Route::get('/donors/create', function () {
    return view('donors.create');
})->name('donors.create');

Route::post('/donors', [DonorController::class, 'store'])
    ->name('donors.store');

Route::get('/donations', [DonationController::class, 'index'])
    ->name('donations.index');

Route::GET('/donations/search', [DonationController::class, 'search'])
    ->name('donations.search');

Route::post('/donations/record', [DonationController::class, 'store'])
    ->name('donations.store');

Route::get('/storage', function () {
    return view('storage');
})->name('storage');

Route::get('/about', function () {
    return view('about');
})->name('about');