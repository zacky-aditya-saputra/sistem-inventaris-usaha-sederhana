<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <--- PENTING: Jangan lupa baris ini

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Cek apakah aplikasi diakses melalui Dev Tunnel (VS Code)
        if (str_contains(request()->getHost(), 'devtunnels.ms')) {
            // Paksa Laravel menggunakan HTTPS agar tidak otomatis menambahkan port :8000
            URL::forceScheme('https');
        }
    }
}