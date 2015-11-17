<?php

namespace Strapieno\Auth\Model;

use Matryoshka\Model\ObservableModel;
use Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria;
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
        if (is_array($dataClient) && isset($dataClient['_id'])) {
            // TODO criteria manager
            $criteria = (new ActiveRecordCriteria())->setId((string) $dataClient['_id']);
            return $this->find($criteria)->current();
        }
        throw new \RuntimeException(sprintf('Invalid array data on %s', __METHOD__));
    }
}
