<?php
namespace Strapieno\Auth\Model\Criteria\Mongo;

use Matryoshka\Model\Wrapper\Mongo\Criteria\FindAllCriteria;

/**
 * Class OauthClientMongoCollectionCriteria
 */
class OauthClientMongoCollectionCriteria extends FindAllCriteria
{
    /***
     * @param $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        // TODO add hydrator
        $this->selectionCriteria['client_id'] = (string) $clientId;
        return $this;
    }
}