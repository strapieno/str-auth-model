<?php

return [
    'service_manager' => [
        'factories' => [
            'Strapieno\Auth\Model\OAuth2\StorageAdapter'
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
    'controllers' => [
        'invokables' => [
            'Strapieno\Auth\Model\Controller\CrudController' => 'Strapieno\Auth\Model\Controller\CrudController'
        ],
        'initializers' => [
            'Strapieno\Auth\Model\OauthClientModelInitializer'
        ],
    ],
    'console' => [
        'router' => [
            'routes' => [
                'add-client' => [
                    'options' => [
                        'route'    => 'add-client --clientId= (OauthClient|OauthUserClient):type [--verbose|-v]',
                        'defaults' => [
                            'controller' => 'Strapieno\Auth\Model\Controller\CrudController',
                            'action'     => 'add'
                        ]
                    ]
                ]
            ]
        ]
    ],
    'input_filters' => [
        'abstract_factories' => [
            'Strapieno\Utils\InputFilter\InputFilterAbstractServiceFactory',
        ],
        'invokables' => [
            'Zend\InputFilter\InputFilter' => 'Zend\InputFilter\InputFilter',
            'Zend\InputFilter\Input' => 'Zend\InputFilter\Input'
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
        'OauthUserClient' => [
            'type' => 'Strapieno\Auth\Model\Entity\OauthUserClientEntity',
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
            'prototype_strategy' => 'Matryoshka\Model\Object\PrototypeStrategy\ServiceLocatorStrategy',
            'hydrator' => 'Strapieno\Auth\Model\Hydrator\OauthClientModelHydrator',
            'listeners' => [
                'Strapieno\Utils\Model\Listener\DateAwareListener',
            ],
        ],
    ],
    'OauthClientTypes' => [
        'OauthClient',
        'OauthUserClient'
    ],
    'strapieno-array-validators' => [
        'OauthClientTypesValidator' => [
            'name_key_array_config' => 'OauthClientTypes'
        ]
    ],
    'strapieno_input_filter_specs' => [
        'Strapieno\Auth\Model\InputFilter\DefaultInputFilter' => [
            'client_id' => [
                'name' => 'client_id',
                'require' => false,
                'allow_empty' => true,
                'filters' => [
                    'stringtrim' => [
                        'name' => 'stringtrim',
                    ]
                ]
            ],
            'type' => [
                'name' => 'type',
                'require' => false,
                'allow_empty' => true,
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'OauthClientTypesValidator' => [
                        'name' => 'OauthClientTypesValidator',
                        'break_chain_on_failure' => true
                    ]
                ]
            ],
            'password' => [
                'name' => 'password',
                'require' => false,
                'allow_empty' => true,
                'filters' => [
                    'stringtrim' => [
                        'name' => 'stringtrim',
                    ]
                ],
            ]
        ]
    ]
];

