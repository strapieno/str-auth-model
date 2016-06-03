<?php
namespace Strapieno\Auth\Model;


use Strapieno\Auth\Api\Authentication\AuthenticationListenerAggregate;
use Zend\Console\Adapter\AdapterInterface;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\ModuleManager\Feature\HydratorProviderInterface;
use Zend\ModuleManager\Feature\ValidatorProviderInterface;
use Zend\Mvc\MvcEvent;
use Zend\Stdlib\ArrayUtils;
use Zend\Validator\ValidatorPluginManager;
use Zend\Validator\ValidatorPluginManagerAwareInterface;

/**
 * Class Module
 */
class Module implements HydratorProviderInterface, ValidatorProviderInterface, ConsoleUsageProviderInterface
{

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * {@inheritdoc}
     */
    public function getHydratorConfig()
    {
        return include __DIR__ . '/config/hydrator.config.php';
    }

    /**
     * {@inheritdoc}
     */
    public function getValidatorConfig()
    {
        return include __DIR__ . '/config/validator.config.php';
    }

    /**
     * {@inheritdoc}
     */
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/',
                ],
            ],
        ];
    }

    public function getConsoleUsage(AdapterInterface $console)
    {
        return [
            // Describe available commands
            'add-client --clientId=<clientId> <type> [--verbose|-v]' => 'Add oauth client entity',
            // Describe expected parameters
            [ '--clientId', 'Name of the client id'],
            [ 'type', 'The type of the oauth client, must be OauthClient or OauthUserClient'],
            [ '--verbose|-v', '(optional) turn on verbose mode']
        ];
    }
}
