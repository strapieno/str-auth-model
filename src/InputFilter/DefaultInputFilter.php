<?php

namespace Strapieno\Auth\Model\InputFilter;

use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;

/**
 * Class DefaultInputFilter
 */
class DefaultInputFilter extends InputFilter
{
    public function init()
    {
        $this->addClientIdInput()
            ->addClientSecretInput()
            ->addTypeInput();
    }

    /**
     * @return $this
     */
    protected function addClientIdInput()
    {
        $input = new Input('client_id');
        // Filter
        $filterManager = $this->getFactory()->getDefaultFilterChain()->getPluginManager();
        $input->getFilterChain()->attach($filterManager->get('stringtrim'));

        $this->add($input);
        return $this;
    }

    /**
     * @return $this
     */
    protected function addClientSecretInput()
    {
        $input = new Input('password');
        // Filter
        $filterManager = $this->getFactory()->getDefaultFilterChain()->getPluginManager();
        $input->getFilterChain()->attach($filterManager->get('stringtrim'));

        $this->add($input);
        return $this;
    }

    /**
     * @return $this
     */
    protected function addTypeInput()
    {
        $input = new Input('type');
        // Filter
        $filterManager = $this->getFactory()->getDefaultFilterChain()->getPluginManager();
        $input->getFilterChain()->attach($filterManager->get('stringtrim'));
        // Validator
        $validatorManager = $this->getFactory()->getDefaultValidatorChain()->getPluginManager();
        $input->getValidatorChain()->attach($validatorManager->get('OauthClientTypesValidator'));
        $this->add($input);
        return $this;
    }
}