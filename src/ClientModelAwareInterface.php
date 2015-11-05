<?php

namespace Strapieno\Auth\Model;

/**
 * Interface ClientInterface
 */
interface ClientModelAwareInterface
{
    /**
     * @return ClientModelInterface|null
     */
    public function getClientModelService();

    /**
     * @param ClientModelInterface $clientModelService
     * @return $this
     */
    public function setClientModelService(ClientModelInterface $clientModelService);
}

