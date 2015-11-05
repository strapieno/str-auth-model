<?php

return [
    // Register aclman services
    'service_manager' => [
        'factories' => [
            'Strapieno\Auth\Model\OAuth2\Adapter\MongoAdapter'
                => 'Strapieno\Auth\Model\OAuth2\Adapter\MongoAdapterFactory',
        ],
        'invokables' => [
            'Strapieno\Auth\Model\Criteria\Mongo\ClientMongoCollectionCriteria'
                => 'Strapieno\Auth\Model\Criteria\Mongo\ClientMongoCollectionCriteria'
        ],
        'aliases' => [
            'Strapieno\Auth\Model\Criteria\ClientCollectionCriteria'
                => 'Strapieno\Auth\Model\Criteria\Mongo\ClientMongoCollectionCriteria'
        ]
    ],
    'mongocollection' => [
        'DataGateway\Mongo\Client' => [
            'database' => 'Mongo\Db',
            'collection' => 'oauth_client',
        ],
    ],
    'matryoshka-objects' => [
        'Client' => [
            'type' => 'Strapieno\Auth\Model\Entity\ClientEntity',
            'active_record_criteria' => 'Strapieno\User\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ],
    ],
    'matryoshka-models' => [
        'Strapieno\Auth\Model\ClientModelService' => [
            'datagateway' => 'DataGateway\Mongo\Client',
            'type' => 'Strapieno\Auth\Model\ClientModelService',
            'object' => 'Client',
            'resultset' => 'Strapieno\Model\ResultSet\HydratingResultSet',
            'paginator_criteria' => 'Strapieno\User\Model\Criteria\ClientCollectionCriteria',
            'hydrator' => 'Strapieno\Auth\Model\Hydrator\ClientModelHydrator',
            'listeners' => [
                'Strapieno\ModelUtils\Listener\DateAwareListener',
            ],
        ],
    ],
];

