<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * registro servicios de la aplicaci??n.
     */
    public function register(): void
    {
        // registro servicios personalizados si los necesito.
    }

    /**
     * inicializo servicios de la aplicaci??n.
     */
    public function boot(): void
    {
        // inicializo configuraciones y eventos.
    }
}
