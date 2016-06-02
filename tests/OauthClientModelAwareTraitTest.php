<?php
namespace Strapieno\Auth\ModelTest;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Auth\Model\Entity\OauthUserClientEntity;
use Strapieno\Auth\Model\OauthClientModelAwareTrait;
use Strapieno\Auth\Model\OauthClientModelInitializer;
use Strapieno\Auth\Model\OauthClientModelInitializer2;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\RoleAwareTrait;
use Strapieno\User\Model\Entity\UserIdAwareTrait;
use Zend\ServiceManager\Di\DiServiceInitializer;

/**
 * Class OauthClientEntity
 */
class OauthClientModelAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var OauthClientModelAwareTrait
     */
    protected $trait;

    public function setUp()
    {
        $this->trait = $this->getMockForTrait('Strapieno\Auth\Model\OauthClientModelAwareTrait');
    }

    public function testGetSetOauthClientModelService()
    {
        $input = $this->getMock('Strapieno\Auth\Model\OauthClientModelInterface');
        $this->trait->setOauthClientModelService($input);
        $this->assertSame($input, $this->trait->getOauthClientModelService());
    }
}
