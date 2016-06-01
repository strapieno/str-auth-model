<?php

namespace Strapieno\Auth\Model;

use Strapieno\Utils\Inizilizer\AbstractModelServiceInizilizer;

/**
 * Class OauthClientModelInizializer
 */
class OauthClientModelInizializer extends AbstractModelServiceInizilizer
{
    const SERVICE_NAME = OauthClientModelService::class;
    const INSTANCE_CLASS = OauthClientModelAwareInterface::class;
    const SETTER_METHOD = 'setOauthClientModelService';
}