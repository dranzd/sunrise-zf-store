<?php

namespace Sunrise\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class StoreController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    public function editAction()
    {
        //var_dump($this);
        var_dump($this->getRequest());
        //var_dump($this->getRequest()->getQuery()->id);
        //var_dump($this->getRequest()->toString());
        //var_dump($this->getRequest()->detectRequestUri());
        return new ViewModel();
    }
}
