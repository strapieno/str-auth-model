<?php

namespace Strapieno\Auth\Model;

use Matryoshka\Model\ObservableModel;
use Matryoshka\Model\ResultSet\ResultSetInterface;
use Strapieno\Auth\Model\Criteria\Mongo\OauthClientMongoCollectionCriteria;
use Strapieno\Auth\Model\Entity\OauthClientInterface;

/**
 * Class OauthClientModelService
 */
class OauthClientModelService extends ObservableModel implements OauthClientModelInterface
{
    /**
     * @param $dataClient
     * @return OauthClientInterface|null
     */
    public function getAuthenticationClient($dataClient)
    {
        if (is_array($dataClient) && isset($dataClient['client_id'])) {
            // TODO criteria manager
            $criteria = (new OauthClientMongoCollectionCriteria())->setClientId($dataClient['client_id']);
            /** @var $resultSet ResultSetInterface */
            $resultSet = $this->find($criteria);
            if ($resultSet->count() == 1) {
                return $resultSet->current();
            }
            throw new \RuntimeException(sprintf('Ambiguous client id %s', $dataClient['client_id']));
        }
        throw new \RuntimeException(sprintf('Invalid array data on %s', __METHOD__));
    }
}
