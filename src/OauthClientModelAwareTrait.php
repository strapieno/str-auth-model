<?php

namespace Strapieno\Auth\Model;

/**
 * Interface OauthClientModelAwareTrait
 */
trait OauthClientModelAwareTrait
{
    /**
     * @var OauthClientModelInterface
     */
    protected $oauthClientModelService;

    /**
     * @return OauthClientModelInterface|null
     */
    public function getOauthClientModelService()
    {
        return $this->oauthClientModelService;
    }

    /**
     * @param OauthClientModelInterface $oauthClientModelService
     * @return $this
     */
    public function setOauthClientModelService(OauthClientModelInterface $oauthClientModelService)
    {
        $this->oauthClientModelService = $oauthClientModelService;
        return $this;
    }
}

