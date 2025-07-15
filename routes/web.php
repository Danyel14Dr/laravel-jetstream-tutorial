<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/productos/crear', function () {
    return view('productos.crear');
})->middleware(['auth'])->name('productos.crear');

Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

