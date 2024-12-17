<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Clientes\Controllers\ClienteController;

Route::prefix('')->group(function () {
    Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
});
