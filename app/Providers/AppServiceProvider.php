<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Blaze\Blaze;
use Livewire\Livewire;
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

        Blaze::disable();

        // app('blaze')->debug();

        // Livewire::addNamespace(
        //     namespace: 'foo',
        //     classNamespace: \App\Foo::class,
        //     classPath: app_path('Foo'),
        //     classViewPath: resource_path('views/foo'),
        // );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Auth::loginUsingId(2);
    }
}
