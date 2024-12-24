<?php

if (!function_exists('custom_asset')) {
    function custom_asset($path, $secure = null)
    {
        // Retrieve the base path from the .env file
        $basePath = env('ASSET_BASE_PATH', '');

        // Generate the full path using Laravel's URL helper
        return app('url')->asset($basePath . ltrim($path, '/'), $secure);
    }
}
