<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::group(['prefix' => 'categorias'], function () {
    Route::get('', [CategoriaController::class, 'index'])->name('admin.categoria.index');
    Route::get('create', [CategoriaController::class, 'create'])->name('admin.categoria.create');
    Route::post('store', [CategoriaController::class, 'store'])->name('admin.categoria.store');
    Route::get('edit/{id}', [CategoriaController::class, 'edit'])->name('admin.categoria.edit');
    Route::put('update/{id}', [CategoriaController::class, 'update'])->name('admin.categoria.update');
    Route::get('destroy/{id}', [CategoriaController::class, 'destroy'])->name('admin.categoria.destroy');
    Route::get('listado', [CategoriaController::class, 'listado'])->name('admin.categoria.listado');
});