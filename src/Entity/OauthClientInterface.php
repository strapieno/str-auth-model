<?php

namespace Strapieno\Auth\Model\Entity;

use Strapieno\ModelUtils\Entity\DateHistoryAwareInterface;
use Strapieno\ModelUtils\Entity\EntityInterface;
use Strapieno\ModelUtils\Entity\TypeAwareInterface;
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

}