<?php

namespace Strapieno\Auth\Model\Entity;

use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Entity\TypeAwareInterface;
use Strapieno\User\Model\Entity\UserIdAwareInterface;
use Zend\Permissions\Acl\Role\RoleInterface;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Interface OauthClientInterface
 *
 * @package Strapieno\Auth\Model\Entity
 */
interface OauthClientInterface extends
    EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    RoleInterface,
    TypeAwareInterface,
    UserIdAwareInterface
{
    const PASSWORD_BCRYPT_COST = 10;
}