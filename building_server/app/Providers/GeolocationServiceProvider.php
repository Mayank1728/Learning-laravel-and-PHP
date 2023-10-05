<?php

namespace App\Providers;

use App\Services\Geolocation\Geolocation;
use App\Services\Map\Map;
use App\Services\Satellite\Satellite;
use Illuminate\Support\ServiceProvider;

class GeolocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        /**
         * Here it returns Geolocation instance
         * after binding map & satellite
         * to the Geolocation
         */
        $this->app->bind(Geolocation::class, function($app){
            $map = new Map();
            $satellite = new Satellite();

            return new Geolocation($map, $satellite);

        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
