<?php

return [
    // Register aclman services
    'service_manager' => [
        'factories' => [
            'Strapieno\Auth\Model\OAuth2\Adapter\MongoAdapter'
                => 'Strapieno\Auth\Model\OAuth2\Adapter\MongoAdapterFactory',
        ],
        'invokables' => [
            'Strapieno\Auth\Model\Criteria\Mongo\OauthClientMongoCollectionCriteria'
                => 'Strapieno\Auth\Model\Criteria\Mongo\OauthClientMongoCollectionCriteria'
        ],
        'aliases' => [
            'Strapieno\Auth\Model\Criteria\OauthClientCollectionCriteria'
                => 'Strapieno\Auth\Model\Criteria\Mongo\OauthClientMongoCollectionCriteria'
        ]
    ],
    'mongocollection' => [
        'DataGateway\Mongo\OauthClient' => [
            'database' => 'Mongo\Db',
            'collection' => 'oauth_client',
        ],
    ],
    'matryoshka-objects' => [
        'OauthClient' => [
            'type' => 'Strapieno\Auth\Model\Entity\OauthClientEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ],
    ],
    'matryoshka-models' => [
        'Strapieno\Auth\Model\OauthClientModelService' => [
            'datagateway' => 'DataGateway\Mongo\OauthClient',
            'type' => 'Strapieno\Auth\Model\OauthClientModelService',
            'object' => 'OauthClient',
            'resultset' => 'Strapieno\Model\ResultSet\HydratingResultSet',
            'paginator_criteria' => 'Strapieno\Auth\Model\Criteria\OauthClientCollectionCriteria',
            'hydrator' => 'Strapieno\Auth\Model\Hydrator\OauthClientModelHydrator',
            'listeners' => [
                'Strapieno\ModelUtils\Listener\DateAwareListener',
            ],
        ],
    ],
];

