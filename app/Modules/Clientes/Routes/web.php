<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Clientes\Controllers\ClienteController;

Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('cliente.store');
Route::delete('/clientes/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('cliente.update');