<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\InformeController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('ingresos', IngresoController::class);
    Route::resource('gastos', GastoController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('metas', MetaController::class);
    Route::get('informes', [InformeController::class, 'index'])->name('informes.index');
});
