<?php
return [
    'settings' => [
        // If you put HelloSlim3 in production, change it to false
        'displayErrorDetails' => true,

        // Renderer settins: where are the templates???
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings: where are the logs???
        'logger' => [
            'name' => 'helloslim3',
            'path' => __DIR__ . '/../logs/app.log',
        ],

        // Doctrine settings
        'doctrine' => [
            'meta' => [
                'entity_path' => [
                    'src/Entity'
                ],
                'auto_generate_proxies' => true,
                'proxy_dir' =>  __DIR__.'/../cache/proxies',
                'cache' => null,
            ],
            // MySQL connection settings, change this!!!
            'connection' => [
                'driver'   => 'pdo_mysql',
                'host'     => '127.0.0.1',
                'dbname'   => 'testdb',
                'user'     => 'testuser',
                'password' => 'password',
            ]
        ]
    ],
];
