<?php

return [
    'api_key'  => env('OPENAI_API_KEY', ''),
    'model'    => env('OPENAI_MODEL', 'gpt-4o'),
    'base_url' => env('OPENAI_BASE_URL', 'https://api.openai.com'),
    'timeout'  => env('OPENAI_TIMEOUT', 30),
];
