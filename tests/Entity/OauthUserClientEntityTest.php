<?php
namespace Strapieno\Auth\ModelTest\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Auth\Model\Entity\OauthUserClientEntity;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\RoleAwareTrait;
use Strapieno\User\Model\Entity\UserIdAwareTrait;

/**
 * Class OauthClientEntity
 */
class OauthUserClientEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var OauthUserClientEntity
     */
    protected $entity;

    public function setUp()
    {
        $this->entity = new OauthUserClientEntity();
    }

    public function testGetSetClientId()
    {
        $input = 'test';
        $this->entity->setClientId($input);
        $this->assertSame($input, $this->entity->getClientId());
    }

    public function testGetSetPassword()
    {
        $input = 'test';
        $this->entity->setPassword($input);
        $this->assertSame($input, $this->entity->getPassword());
        $this->assertNotEmpty($this->entity->getClientSecret());
    }

    public function testGetSetClientSecret()
    {
        $input = 'test';
        $this->entity->setClientSecret($input);
        $this->assertSame($input, $this->entity->getClientSecret());
    }

    public function testGetSetUserId()
    {
        $input = 'test';
        $this->entity->setUserId($input);
        $this->assertSame($input, $this->entity->getUserId());
    }

    public function testGetSeRedirectUri()
    {
        $input = 'test';
        $this->entity->setRedirectUri($input);
        $this->assertSame($input, $this->entity->getRedirectUri());
    }


    public function testGetSeGrantType()
    {
        $input = 'test';
        $this->entity->setGrantTypes($input);
        $this->assertSame($input, $this->entity->getGrantTypes());
    }

}
