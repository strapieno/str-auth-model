<?php

namespace Strapieno\Auth\Model\Validator;

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
    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        var_dump('test'); die();
    }

}