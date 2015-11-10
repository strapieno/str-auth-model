<?php
namespace Strapieno\Auth\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\ModelUtils\Entity\DateHistoryAwareTrait;
use Strapieno\ModelUtils\Entity\RoleAwareTrait;
use Strapieno\User\Model\Entity\UserIdAwareTrait;

/**
 * Class OauthClientEntity
 */
class OauthUserClientEntity extends AbstractOauthClientEntity implements OauthUserClientInterface
{
}