<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire; // Add this import
use App\Livewire\Login; // Add this import
use App\Livewire\Dashboard; // Add this import
use App\Livewire\ForgotPassword;

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
        // Register Components by Path
        Blade::component('components.stat-card', 'stat-card');
        Blade::component('components.status-badge', 'status-badge');
        Blade::component('components.alert', 'alert');
        Blade::component('components.search-input', 'search-input');
        Blade::component('components.loading-spinner', 'loading-spinner');
        Livewire::component('login', Login::class);
        Livewire::component('dashboard', Dashboard::class);
        Livewire::component('forgot-password', ForgotPassword::class);
    }
}
