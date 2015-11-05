<?php

namespace Strapieno\Auth\Model\Entity;

use Strapieno\ModelUtils\Entity\DateHistoryAwareInterface;
use Strapieno\ModelUtils\Entity\EntityInterface;
use Zend\Hydrator\HydratorAwareInterface;
use Zend\Permissions\Acl\Role\RoleInterface;

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