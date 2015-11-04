<?php

return [
    // Register aclman services
    'service_manager' => [
        'factories' => [
            'Strapieno\Auth\Model\OAuth2\Adapter\MongoAdapter' => 'Strapieno\Auth\Model\OAuth2\Adapter\MongoAdapterFactory',
        ]
    ],
];

