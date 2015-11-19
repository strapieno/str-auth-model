<?php

namespace Strapieno\Auth\Model\OAuth2;

/**
 * Interface AdapterInterface
 */
interface AdapterInterface
{
    /**
     * @return string
     */
    public function getIdentityField()
    {
        return $this->identityField;
    }
}