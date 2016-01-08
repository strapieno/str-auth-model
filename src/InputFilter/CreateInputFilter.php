<?php

namespace Strapieno\Auth\Model\InputFilter;

use Zend\InputFilter\Input;

/**
 * Class CreateInputFilter
 */
class CreateInputFilter extends DefaultInputFilter
{
    public function init()
    {
        parent::init();

        $this->updateClientIdInput();
    }

    /**
     * @return $this
     */
    protected function updateClientIdInput()
    {
        $input = $this->get('client_id');
        $validatorManager = $this->getFactory()->getDefaultValidatorChain()->getPluginManager();
        $input->getValidatorChain()->attach($validatorManager->get('oauthclient-clientidalreadyexist'));
        return $this;
    }
}