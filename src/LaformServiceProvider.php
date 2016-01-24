<?php

namespace Karan\Laform;

use Illuminate\Support\ServiceProvider;

class LaformServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'laform');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/laform'),
            __DIR__.'/config/config.php' => config_path('laform.php'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'laform');

        $this->app->bind('laform', 'Karan\Laform\Laform');
    }
}
