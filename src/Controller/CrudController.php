<?php
namespace Strapieno\Auth\Model\Controller;

use Strapieno\Auth\Model\OauthClientModelAwareInterface;
use Strapieno\Auth\Model\OauthClientModelAwareTrait;
use Zend\Console\ColorInterface;
use Zend\Console\Console;
use Zend\Console\Prompt\Line;
use Zend\Console\Request;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class CrudController
 */
class CrudController extends AbstractActionController implements OauthClientModelAwareInterface
{
    use OauthClientModelAwareTrait;

    public function addAction()
    {
        $this->checkConsoleRequest();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $inputFilter = $this->getInputFilter();
        $data['client_id'] = $request->getParam('clientId', null);
        $data['type'] = $request->getParam('type', null);

        $data['password'] = Line::prompt(
            'Password : ',
            true
        );

        $data['password_re'] = Line::prompt(
            'Repeat password : ',
            true
        );

        $inputFilter->setData($data);

        if (!$inputFilter->isValid()) {

            $this->showMessages($inputFilter->getMessages());
            return 0;
        }

        $entity = $this->getOauthClient($inputFilter->getValues());
        $this->getOauthClientModelService()->getHydrator()->hydrate($inputFilter->getValues(), $entity);
        $entity->save();
        if ($verbose) {
            Console::getInstance()->writeLine(
                'Client saved',
                ColorInterface::GREEN
            );
        }
        return 1;
    }

    public function checkConsoleRequest()
    {
        $request = $this->getRequest();
        if (!$request instanceof Request) {
            throw new \RuntimeException('The request must be a console request');
        }
    }

    /**
     * @param $data
     * @return mixed
     */
    protected function getOauthClient($data)
    {
        $objectStrategy = $this->getServiceLocator()
            ->get('Matryoshka\Model\Object\PrototypeStrategy\ServiceLocatorStrategy');

        return $objectStrategy->createObject($this->getOauthClientModelService()->getObjectPrototype(), $data);
    }

    /**
     * @return InputFilter
     */
    protected function getInputFilter()
    {
        /** @var $inputFilter InputFilter */
        $inputFilter = $this->getServiceLocator()
            ->get('InputFilterManager')
            ->get('Strapieno\Auth\Model\InputFilter\DefaultInputFilter');

        $vm = $this->getServiceLocator()
            ->get('ValidatorManager');

        $input = $inputFilter->get('client_id');
        $input->setRequired(true);
        $input->getValidatorChain()->attach(
            $vm->get('oauthclient-clientidalreadyexist')
        );

        $input = new Input('password_re');
        $input->setRequired(false);
        $input->getValidatorChain()->attach(
            $vm->get('identical', ['token' => 'password'])
        );
        return $inputFilter->add($input);
    }
    /**
     * @param $messages
     * @param null $errorKey
     */
    protected function showMessages($messages, $errorKey = null)
    {
        foreach ($messages as $key => $message) {

            if (is_array($message)) {
                $this->showMessages($message, $key);
            } else {
                Console::getInstance()->writeLine(
                    sprintf('%s : %s', $errorKey, $message),
                    ColorInterface::RED
                );
            }
        }
    }
}