<?php
namespace Strapieno\Auth\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\ModelUtils\Entity\DateHistoryAwareTrait;
use Strapieno\ModelUtils\Entity\RoleAwareTrait;

/**
 * Class OauthClientEntity
 */
class OauthClientEntity extends AbstractActiveRecord implements OauthClientInterface
{
    use OauthClientTrait;
    use DateHistoryAwareTrait;
    use RoleAwareTrait;
}