<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        //return new ViewModel();
    }
    public function storeAction()
    {
        //return new ViewModel();
    }
    public function howsworkAction()
    {
        //return new ViewModel();
    }
    public function casestudiesAction()
    {
        //return new ViewModel();
    }
    public function faqAction()
    {
        //return new ViewModel();
    }
    public function aboutusAction()
    {
        //return new ViewModel();
    }
    public function contactAction()
    {
        //return new ViewModel();
    }
    public function termsconditionAction()
    {
        //return new ViewModel();
    }
    public function detailinformationAction()
    {
        //return new ViewModel();
    }
    public function becomepublisherAction()
    {
        //return new ViewModel();
    }
    /*public function addAction()
	{
	   
       /*$title = 'Add a Developer';
       $this->headTitle($title);
       
		$dForm   = new DForm();
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            if($dForm->isValid())
            {
                $developer->exchangeArray($dForm->getData());
                $this->getDeveloperTable()->saveDeveloper($developer);
                
                //return $this->redirect()->toRoute('defaults');
            }
        } 
        
        return array('form'=> $dForm);
	}*/
}
