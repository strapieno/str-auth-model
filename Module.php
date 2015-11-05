<?php
namespace Strapieno\Auth\Model;


use Strapieno\Auth\Api\Authentication\AuthenticationListenerAggregate;
use Zend\ModuleManager\Feature\HydratorProviderInterface;
use Zend\Mvc\MvcEvent;
use Zend\Stdlib\ArrayUtils;

/**
 * Class Module
 */
class Module implements HydratorProviderInterface
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
}
