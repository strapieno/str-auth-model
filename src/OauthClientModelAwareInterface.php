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
     * @param OauthClientModelInterface $clientModelService
     * @return $this
     */
    public function setOauthClientModelService(OauthClientModelInterface $oauthClientModelService);
}

