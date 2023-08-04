<?php

use GuzzleHttp\RequestOptions;
use Spatie\Sitemap\Crawler\Profile;

return [
    'use_cache' => env('SITEMAP_USE_CACHE', false),
    'cache_key' => env('SITEMAP_CACHE_KEY', 'spatie.sitemap.cache'),
    'cache_duration' => env('SITEMAP_CACHE_DURATION', 3600),
    'use_limit_size' => env('SITEMAP_USE_LIMIT_SIZE', false),
    'max_size' => env('SITEMAP_MAX_SIZE', 50000),
    'max_urls' => env('SITEMAP_MAX_URLS', 50000),

    'default' => [
        'use_cache' => true,
        'cache_key' => 'spatie.sitemap.cache',
        'cache_duration' => 3600,
    ],

    'profiles' => [
        'main' => [
            'url' => 'https://centredappelkcl.com/', 
            'use_cache' => false,
            'cache_key' => 'spatie.sitemap.cache.main',
            'cache_duration' => 3600,
        ],
    ],
];
