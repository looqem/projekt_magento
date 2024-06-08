<?php
return [
    'remote_storage' => [
        'driver' => 'file'
    ],
    'system' => [
        'default' => [
            'catalog' => [
                'search' => [
                    'engine' => 'elasticsearch8', // Wybierz odpowiednią wersję Elasticsearch: elasticsearch7 lub elasticsearch6
                    'elasticsearch8_server_hostname' => 'localhost',
                    'elasticsearch8_server_port' => '9200',
                    'elasticsearch8_index_prefix' => 'magento2',
                    'elasticsearch8_enable_auth' => '0', // Ustaw na 1, jeśli Elasticsearch wymaga uwierzytelnienia
                    'elasticsearch8_enable_https' => '0', // Ustaw na 1, jeśli używasz HTTPS do łączenia się z Elasticsearch
                    'elasticsearch8_server_timeout' => '15',
                ]
            ]
        ]
    ],
    'backend' => [
        'frontName' => 'admin_jna5x41'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'iQpv50IwHbFLEldGdu90NLQoQx1uXWjR'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '5f9_'
            ],
            'page_cache' => [
                'id_prefix' => '5f9_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'base64+o5PulANFvosjcSh/E88gT5MPllXAbBG8zqacrYTqDQ='
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento',
                'username' => 'root',
                'password' => '',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'mage2rock.magento.com'
    ],
    'install' => [
        'date' => 'Thu, 06 Jun 2024 18:20:01 +0000'
    ]
];
