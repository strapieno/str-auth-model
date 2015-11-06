<?php
return [
    'invokables' => [
        'Strapieno\Auth\Model\Hydrator\Mongo\OauthClientMongoModelHydrator'
            => 'Strapieno\Auth\Model\Hydrator\Mongo\OauthClientMongoModelHydrator'
    ],
    'aliases' => [
        'Strapieno\Auth\Model\Hydrator\OauthClientModelHydrator'
            => 'Strapieno\Auth\Model\Hydrator\Mongo\OauthClientMongoModelHydrator'
    ]
];