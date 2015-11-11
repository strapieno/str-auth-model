<?php

namespace Strapieno\Auth\Model\Entity;

use Zend\Crypt\Password\Bcrypt;

/**
 * Class OauthClientTrait
 */
trait OauthClientTrait
{
    /**
     * @var string
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $clientSecret;

    /**
     * @var string
     */
    protected $redirectUri;

    /**
     * @var string
     */
    protected $grantTypes;

    /**
     * @var string
     */
    protected $userId;

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        if (!empty($password)) {
            $this->setClientSecret((new Bcrypt)->setCost(OauthClientInterface::PASSWORD_BCRYPT_COST));
            $this->password = $password;
        }
        return $this;
    }

    /**
     * @param string $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrantTypes()
    {
        return $this->grantTypes;
    }

    /**
     * @param string $grantTypes
     * @return $this
     */
    public function setGrantTypes($grantTypes)
    {
        $this->grantTypes = $grantTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @param string $redirectUri
     * @return $this
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
}