<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;
use Application\Model\homepagetable;
use Application\Model\homepagetableTable;
use Application\Model\homepageslidertableTable;
use Application\Model\homepagewalloffameTable;
use Application\Model\templatestoretbleTable;
use Zend\Mvc\Controller\AbstractActionController;
use Application\Model\templateimagesTable;
use Application\Model\howsworkpagetbleTable;
use Application\Model\howsworkstepstbleTable;
use Application\Model\becomepublisherTable;
use Application\Model\casestudiesTable;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
     protected $becomepublisherTable,$homepagetableTable,$homepageslidertable,$templateimagesTable,$homepagewalloffameTable,$templatestoretbleTable,$howsworkpagetbleTable,$casestudiesTable,$howsworkstepstbleTable;
    public function indexAction()
    {
          $slideimage = $this->gethomepageslidertableTable()->fetchAll();
          $walloffameimage=$this->gethomepagewalloffameTable()->fetchAll();
 ////////////////////////////////////////////anima
         
  $contents = $this->gethomepagetableTable()->fetchAll('1');
  return new ViewModel(array('content'=>$contents, 'slideImage'=> $slideimage,'wallofFame'=>$walloffameimage)); 
      
 //////////////////////////////////////////////////     
       
    }
    public function storeAction()
    {
        $contents = $this->gettemplatestoretbleTable()->fetchAll('2');
 // return new ViewModel(array()); 
       $slideimage = $this->gettemplateimagesTable()->getResult('1');
       $slideimage1 = $this->gettemplateimagesTable()->getResult('2');
       return new ViewModel(array('templateimage'=>$slideimage,'templateimage1'=>$slideimage1,'content'=>$contents));
    }
    public function howsworkAction()
    {
        $contents=$this->gethowsworkpagetbleTable()->fetchAll('3');
         $contentone=$this->gethowsworkstepstbleTable()->fetchAll();
        return new ViewModel(array('content'=>$contents,'contentpass'=>$contentone));
        //return new ViewModel();
    }
    public function casestudiesAction()
    {
        /*$contentone=$this->getcasestudiesTable()->fetchAll();
        return new ViewModel(array('contentpass'=>$contentone));*/
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
        $contentone=$this->getbecomepublisherTable()->fetchAll();
        return new ViewModel(array('contentpass'=>$contentone));
    }
    
  public function developersAction()
    {
    
        
    } 
    
     public function documentationAction()
    {
    
        
    } 
    
        
    public function gethomepagetableTable()
    {
        if (!$this->homepagetableTable) {
         $sm = $this->getServiceLocator();
         $this->homepagetableTable = $sm->get('Application\Model\homepagetableTable');
        }
        return $this->homepagetableTable;
        }      
        
    
    public function gethomepageslidertableTable()
    {
        if (!$this->homepagetableTable) {
         $sm = $this->getServiceLocator();
         $this->homepageslidertableTable = $sm->get('Application\Model\homepageslidertableTable');
        }
        return $this->homepageslidertableTable;
    }
     public function gethomepagewalloffameTable()
    {
        if (!$this->homepagewalloffameTable) {
         $sm = $this->getServiceLocator();
         $this->homepagewalloffameTable = $sm->get('Application\Model\homepagewalloffameTable');
        }
        return $this->homepagewalloffameTable;
    }
     public function gettemplateimagesTable()
    {
        if (!$this->templateimagesTable) {
         $sm = $this->getServiceLocator();
         $this->templateimagesTable= $sm->get('Application\Model\templateimagesTable');
        }
        return $this->templateimagesTable;
    }
      public function gettemplatestoretbleTable()
    {
        if (!$this->templatestoretbleTable) {
         $sm = $this->getServiceLocator();
         $this->templatestoretbleTable = $sm->get('Application\Model\templatestoretbleTable');
        }
        return $this->templatestoretbleTable;
        }
        public function gethowsworkpagetbleTable()
    {
        if (!$this->howsworkpagetbleTable) {
         $sm = $this->getServiceLocator();
         $this->howsworkpagetbleTable = $sm->get('Application\Model\howsworkpagetbleTable');
        }
        return $this->howsworkpagetbleTable;
        }
        public function gethowsworkstepstbleTable()
    {
        if (!$this->howsworkstepstbleTable) {
         $sm = $this->getServiceLocator();
         $this->howsworkstepstbleTable = $sm->get('Application\Model\howsworkstepstbleTable');
        }
        return $this->howsworkstepstbleTable;
        }
         public function getbecomepublisherTable()
    {
        if (!$this->becomepublisherTable) {
         $sm = $this->getServiceLocator();
         $this->becomepublisherTable = $sm->get('Application\Model\becomepublisherTable');
        }
        return $this->becomepublisherTable;
        }
         public function getcasestudiesTable()
    {
        if (!$this->becomepublisherTable) {
         $sm = $this->getServiceLocator();
         $this->casestudiesTable = $sm->get('Application\Model\casestudiesTable');
        }
        return $this->casestudiesTable;
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
