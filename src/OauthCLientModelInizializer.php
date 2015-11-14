<?php

namespace Strapieno\Auth\Model;

use Strapieno\ModelUtils\Inizilizer\AbstractModelServiceInizilizer;

/**
 * Class OauthCLientModelInizializer
 */
class OauthCLientModelInizializer extends AbstractModelServiceInizilizer
{
    const SERVICE_NAME = OauthClientModelService::class;
    const INSTANCE_CLASS = OauthClientModelAwareInterface::class;
    const SETTER_METHOD = 'setOauthClientModelService';
}