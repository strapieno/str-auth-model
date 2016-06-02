<?php
namespace Strapieno\Auth\Model;


/**
 * Class OauthClientModelInitializer
 */
class OauthClientModelInitializer
{
    const SERVICE_NAME = OauthClientModelService::class;
    const INSTANCE_CLASS = OauthClientModelAwareInterface::class;
    const SETTER_METHOD = 'setOauthClientModelService';
}