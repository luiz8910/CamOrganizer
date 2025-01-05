<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;

trait Environment
{
    public function getEnvJsonValue($keys)
    {
        // Define the path to the env.json file in the root directory
        $path = base_path('env.json');

        // Check if the file exists
        if (!File::exists($path)) {
            throw new \Exception('env.json file not found.');
        }

        // Get the content of the JSON file
        $content = File::get($path);

        // Decode the JSON content into an associative array
        $data = json_decode($content, true);

        // Check for JSON decode errors
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON format in env.json.');
        }

        // Traverse the array using the provided keys
        foreach (explode('.', $keys) as $key) {
            if (!isset($data[$key])) {
                return null; // Return null if the key does not exist
            }
            $data = $data[$key]; // Navigate deeper into the array
        }

        return $data;
    }
}
