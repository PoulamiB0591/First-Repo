<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Http\Response;
use Zend\Uri\Http as HttpUri;
class PhpinfoController extends AbstractActionController {
    /**
    * The default action - show the home page
    */
    
 
 
    public function indexAction()
    {
        $this->layout('layout/adminlayout.phtml');
       echo phpinfo();
      
  }  
  
  
  }