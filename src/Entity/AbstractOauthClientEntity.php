<?php

namespace Strapieno\Auth\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\ModelUtils\Entity\DateHistoryAwareTrait;
use Strapieno\ModelUtils\Entity\RoleAwareTrait;
use Strapieno\ModelUtils\Entity\TypeAwareTrait;
use Strapieno\User\Model\Entity\UserIdAwareTrait;

/**
 * Class AbstractOauthClientEntity
 */
abstract class AbstractOauthClientEntity extends AbstractActiveRecord implements OauthClientInterface
{
    use OauthClientTrait;
    use DateHistoryAwareTrait;
    use RoleAwareTrait;
    use UserIdAwareTrait;
    use TypeAwareTrait;
}