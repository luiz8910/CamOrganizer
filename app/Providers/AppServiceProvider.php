<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->bind('asset', function () {
            return function ($path, $secure = null) {
                // Retrieve the base path from the .env file
                $basePath = env('ASSET_BASE_PATH', '');

                // Prepend the base path and call the default asset() helper
                return URL::asset($basePath . ltrim($path, '/'), $secure);
            };
        });
    }
}
