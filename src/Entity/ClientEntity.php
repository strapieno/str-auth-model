<?php
namespace Strapieno\Auth\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\ModelUtils\Entity\DateHistoryAwareTrait;
use Strapieno\ModelUtils\Entity\RoleAwareTrait;

/**
 * Class ClientEntity
 */
class ClientEntity extends AbstractActiveRecord implements ClientInterface
{
    use ClientTrait;
    use DateHistoryAwareTrait;
    use RoleAwareTrait;
}