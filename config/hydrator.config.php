<?php
return [
    'invokables' => [
        'Strapieno\Auth\Model\Hydrator\Mongo\ClientMongoModelHydrator'
            => 'Strapieno\Auth\Model\Hydrator\Mongo\ClientMongoModelHydrator'
    ],
    'aliases' => [
        'Strapieno\Auth\Model\Hydrator\ClientModelHydrator'
            => 'Strapieno\Auth\Model\Hydrator\Mongo\ClientMongoModelHydrator'
    ]
];