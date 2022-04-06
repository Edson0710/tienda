<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProductoController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');

// Categorias
Route::resource('categorias', CategoriaController::class);
Route::group(['prefix' => 'categoria'], function () {
    Route::get('listado', [CategoriaController::class, 'listado'])->name('categoria.listado');
});

// Productos
Route::resource('productos', ProductoController::class);
Route::group(['prefix' => 'producto'], function () {
    Route::get('listado', [ProductoController::class, 'listado'])->name('producto.listado');
});

