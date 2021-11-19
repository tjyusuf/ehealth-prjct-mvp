<?php

return [
    'name' => 'EhealthApp',
    'manifest' => [
        'name' => env('APP_NAME', 'eHealth Project'),
        'short_name' => 'eHealth',
        'start_url' => '/',
        'background_color' => '#0EA5E9',
        'theme_color' => '#A5F3FC',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'blue',
        'icons' => [
            '72x72' => [
                'path' => '/images/icons/icon-72.png',
                'purpose' => 'any'
            ],
            
            '128x128' => [
                'path' => '/images/icons/icon-128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/icon-144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/icon-152.png',
                'purpose' => 'any'
            ],

            '192x192' => [
                'path' => '/images/icons/icon-192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/icon-256.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/splash-640x1136.png',
            '750x1334' => '/images/icons/splash-750x1334.png',
            '828x1792' => '/images/icons/splash-828x1792.png',
            '1125x2436' => '/images/icons/splash-1125x2436.png',
            '1242x2208' => '/images/icons/splash-1242x2208.png',
            '1242x2688' => '/images/icons/splash-1242x2688.png',
            '1536x2048' => '/images/icons/splash-1536x2048.png',
            '1668x2224' => '/images/icons/splash-1668x2224.png',
            '1668x2388' => '/images/icons/splash-1668x2388.png',
            '2048x2732' => '/images/icons/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Home',
                'description' => 'Go to homepage',
                'url' => '/',
                'icons' => [
                    "src" => "/images/icons/icon-72.png",
                    "purpose" => "any"
                ]
            ],
            
        ],
        'custom' => []
    ]
];
