<?php

namespace Strapieno\Auth\Model\Validator;

use Matryoshka\Model\ResultSet\ResultSetInterface;
use Strapieno\Auth\Model\Criteria\Mongo\OauthClientMongoCollectionCriteria;
use Strapieno\Auth\Model\OauthClientModelAwareInterface;
use Strapieno\Auth\Model\OauthClientModelAwareTrait;
use Zend\Validator\AbstractValidator;
use Zend\Validator\Exception;

/**
 * Class ClientIdAlreadyExist
 */
class ClientIdAlreadyExist extends AbstractValidator implements OauthClientModelAwareInterface
{
    use OauthClientModelAwareTrait;

    const CLIENT_ID_ALREDY_EXYST = 'clientIdAlreadyExist';

    /**
     * @var array
     */
    protected $messageTemplates = [
        self::CLIENT_ID_ALREDY_EXYST => 'Cliend id must be unique'
    ];

    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        // TODO add assetion manager
        $criteria = (new OauthClientMongoCollectionCriteria())->setClientId($value);
        /** @var ResultSetInterface $result */
        $result  = $this->getOauthClientModelService()->find($criteria);
        if ($result->count() > 0) {
            $this->error(self::CLIENT_ID_ALREDY_EXYST);
            return false;
        }
        return true;
    }
}