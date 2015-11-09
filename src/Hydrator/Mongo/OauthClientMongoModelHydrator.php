<?php

namespace Strapieno\Auth\Model\Hydrator\Mongo;

use Matryoshka\Model\Wrapper\Mongo\Hydrator\Strategy\MongoIdStrategy;
use Strapieno\ModelUtils\Hydrator\Mongo\DateHistoryHydrator;

/**
 * Class OauthClientMongoModelHydrator
 */
class OauthClientMongoModelHydrator extends DateHistoryHydrator
{
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);
        $this->addStrategy('user_id', new MongoIdStrategy());
    }
}