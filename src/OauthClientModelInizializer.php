<?php
namespace Strapieno\Auth\Model;

use Strapieno\Utils\Initializer\AbstractModelServiceInitializer;

/**
 * Class OauthClientModelInitializer
 */
class OauthClientModelInitializer extends AbstractModelServiceInitializer
{
    const SERVICE_NAME = OauthClientModelService::class;
    const INSTANCE_CLASS = OauthClientModelAwareInterface::class;
    const SETTER_METHOD = 'setOauthClientModelService';
}