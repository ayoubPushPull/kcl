<?php

use GuzzleHttp\RequestOptions;
use Spatie\Sitemap\Crawler\Profile;

// config/sitemap.php
return [
    'default' => [
        'use_cache' => false,
        'cache_key' => 'spatie.sitemap.cache',
        'cache_duration' => 3600,
        'generate' => [
            // List of URLs to include in the sitemap
            '/services/camera_surveillance',
            '/services/dev_web_mobile',
            '/services/centre_d_appel',
            '/services/community_manager',
            '/services/photo_video',
            '/services/traitement',
            '/',
            '/about',
            '/contact',
            '/recrutement',
            '/services',
        ],
    ],
];

