<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
})->name( 'home');

$rutas = glob(base_path('app/Modules/*/Routes/web.php'));

foreach ($rutas as $ruta) {
    require_once $ruta;
}