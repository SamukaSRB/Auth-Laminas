<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class AuthController extends AbstractActionController
{
    public function createAction()
    {
        
        return new ViewModel();
    }
}