<?php

namespace Helloworld\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $greetingSrv = $this->getServiceLocator()->get('greetingService');
        return new ViewModel(array('greeting' => $greetingSrv->getGreeting()));
    }
}
