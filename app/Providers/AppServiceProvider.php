<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('isGuru', function ($user) {
            return $user->role == 'guru';
        });
        Gate::define('isOrangTua', function ($user) {
            return $user->role == 'orang_tua';
        });
    }
}
