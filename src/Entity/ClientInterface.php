<?php

namespace Strapieno\Auth\Model\Entity;

use Strapieno\ModelUtils\Entity\DateHistoryAwareInterface;
use Strapieno\ModelUtils\Entity\EntityInterface;
use Zend\Permissions\Acl\Role\RoleInterface;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class ClientInterface
 */
interface ClientInterface extends
    EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    RoleInterface
{

}