<?php

namespace Strapieno\Auth\Model;

/**
 * Interface ClientInterface
 */
interface ClientModelAwareInterface
{
    /**
     * @var ClientModelInterface
     */
    protected $clientModelService;

    /**
     * @return ClientModelInterface|null
     */
    public function getClientModelService()
    {
        return $this->clientModelService;
    }

    /**
     * @param ClientModelInterface $clientModelService
     * @return $this
     */
    public function setClientModelService(ClientModelInterface $clientModelService)
    {
        $this->clientModelService = $clientModelService;
        return $this;
    }
}

