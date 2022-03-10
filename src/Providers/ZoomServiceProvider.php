<?php

namespace Suainul\ZoomService\Providers;

use Illuminate\Support\ServiceProvider;
use Suainul\ZoomService\ZoomService;

class ZoomServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/zoom.php', 'zoom');

        // Register the service the package provides.
        $this->app->singleton('zoomservice', function ($app) {
            return new ZoomService;
        });
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../../config/zoom.php' => config_path('zoom.php'),
        ], 'zoom.config');
    }
}