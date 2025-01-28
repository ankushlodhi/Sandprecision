<?php
return [
    'backend' => [
        'frontName' => 'sandsadmin'
    ],
    'crypt' => [
        'key' => 'vzw0m7dyf3itpqa3ofae9oiryiqcxmqr
2e285f645deebda15a50b69e70f2590b
3ab308d86242cfcae54595053e40bb01'
    ],
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'localhost',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '2',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '3',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '600'
        ]
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'sandsprecision_devsite',
                'username' => 'sandsprecision_devsite',
                'password' => 'fRoQ8vxaWJTi',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'full_page' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'translate' => 1,
        'config_webservice' => 1,
        'compiled_config' => 1,
        'vertex' => 1
    ],
    'install' => [
        'date' => 'Fri, 17 Mar 2017 11:18:58 +0100'
    ],
    'downloadable_domains' => [
        'www.sandsprecision.com'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'aDmifjC2SRBuN6ge4axUoINuyXSFhERF'
        ],
        'frontend' => [
            'default' => [
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => '127.0.0.1',
                    'database' => '0',
                    'port' => '6379'
                ]
            ],
            'page_cache' => [
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => '127.0.0.1',
                    'port' => '6379',
                    'database' => '1',
                    'compress_data' => '0'
                ]
            ]
        ]
    ]
];
