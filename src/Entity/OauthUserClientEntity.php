<?php
namespace Strapieno\Auth\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\RoleAwareTrait;
use Strapieno\User\Model\Entity\UserIdAwareTrait;

/**
 * Class OauthClientEntity
 */
class OauthUserClientEntity extends OauthClientEntity implements OauthUserClientInterface
{
}