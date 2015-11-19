<?php
return [
    'initializers' => [
        'Strapieno\Auth\Model\OauthCLientModelInizializer'
    ],
    'invokables' => [
        'Strapieno\Auth\Model\Validator\ClientIdAlreadyExist' => 'Strapieno\Auth\Model\Validator\ClientIdAlreadyExist'
    ],
    'aliases' => [
        'oauthclient-clientidalreadyexist' => 'Strapieno\Auth\Model\Validator\ClientIdAlreadyExist'
    ]
];