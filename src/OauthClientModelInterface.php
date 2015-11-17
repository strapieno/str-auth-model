<?php

namespace Strapieno\Auth\Model;

/**
 * Interface OauthClientModelInterface
 */
interface OauthClientModelInterface
{
    /**
     * @param $dataClient
     * @return OauthClientInterface|null
     */
    public function getAuthenticationClient($dataClient);
}

