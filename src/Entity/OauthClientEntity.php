<?php
namespace Strapieno\Auth\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\RoleAwareTrait;

/**
 * Class OauthClientEntity
 */
class OauthClientEntity extends AbstractOauthClientEntity implements OauthClientInterface
{

}