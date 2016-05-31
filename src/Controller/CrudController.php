<?php
namespace Strapieno\Auth\Model\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class CrudController
 */
class CrudController extends AbstractActionController
{
    public function addAction()
    {
        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');
    }
}