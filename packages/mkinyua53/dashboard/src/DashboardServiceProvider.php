<?php

namespace Mkinyua53\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'kin');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/kin'),
        ]);
    }
}
