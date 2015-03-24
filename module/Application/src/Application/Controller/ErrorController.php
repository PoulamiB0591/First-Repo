<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Http\Response;
use Zend\Uri\Http as HttpUri;
class ErrorController extends AbstractActionController {
    /**
    * The default action - show the home page
    */
    
 
 
    public function indexAction()
    {
   $viewModel = new \Zend\View\Model\ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
  }  
  
  
  }