<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    // Llamada a las views de cada modulo
    public function boot(): void
    {
        View::addNamespace('Clientes', base_path('app/Modules/Clientes/Views'));
    }
}
