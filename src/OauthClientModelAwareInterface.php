<?php

namespace Strapieno\Auth\Model;

/**
 * Interface OauthClientModelAwareInterface
 */
interface OauthClientModelAwareInterface
{
    /**
     * @return OauthClientModelInterface|null
     */
    public function getOauthClientModelService();

    /**
     * @param OauthClientModelInterface $oauthClientModelService
     * @return mixed
     */
    public function setOauthClientModelService(OauthClientModelInterface $oauthClientModelService);
}

