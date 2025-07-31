<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\LivewireManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->extend(\Livewire\V4\Registry\ComponentViewPathResolver::class, function ($app) {
        //     return new \Livewire\V4\Registry\ComponentViewPathResolver([
        //         resource_path('views/livewire'),
        //     ]);
        // });

        // LivewireManager::$v4 = false;
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
