<?php
//Added by Poulami
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Developer;
use Application\Model\Template;
use Application\Model\createapp;
use Application\Form\DForm;
use Application\Form\UploadForm;
use Zend\Session\Container;
/**
 * DeveloperController
 *
 * @author
 *
 * @version
 *
 */
class DeveloperController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
    
    public function indexAction() //edited by Poulami
	{
	   	$error = (int) $this->params()->fromRoute('id');
    	$dForm   = new DForm();  

    	if($error)
    	{
    	   return new ViewModel(array(
                    'error' => $error,'form'=> $dForm
                ));
    	}
        else
        {
            return array('form'=> $dForm);
        }
	}
    
    public function loggingAction()
    {
        $dForm   = new DForm();
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            $uname = $request->getPost('uname');
            $pwd = $request->getPost('pwd');
            
            if($dForm->isValid())
            {
                //$developer->exchangeArray($dForm->getData());
                
                if($this->getDeveloperTable()->getDeveloper($uname,$pwd))
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard'));
                }
                else
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'index','id'=>'1'));
                }
            }
        }
    }
    public function registerAction() //edited by Poulami
    {
    	$error = (int) $this->params()->fromRoute('id');
    	$dForm   = new DForm();  
          
    	if($error)
    	{
    	   return new ViewModel(array(
                    'error' => $error,'form'=> $dForm
                ));
    	}
        else
        {
            return array('form'=> $dForm);
        }
    	/*$title = 'Add a Developer';
    	$this->headTitle($title);*/
    }
    
    public function registeringAction() //edited by Poulami
    {
        $dForm   = new DForm();
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            if($dForm->isValid())
            {
                $developer->exchangeArray($dForm->getData());
                $result = $this->getDeveloperTable()->saveDeveloper($developer);
                
                if($result)
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard'));
                }
                else
                {
                     return $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'index','id'=>1));
                }                
            }
        } 
    }
    
    public function dashboardAction() //added by Poulami
    {
         
        $user_session = new Container('devId');
        $id  = $user_session->devId; 
        
        $result = $this->getTemplateTable()->getTemplate($id);
        
        
       /* if($result['result'] == '1')
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'template'));
        }
        else
        {*/
            return new ViewModel(array(
                    'templates' => $result['result'], 'count'=>$result['count']
                ));
        //}
    }
    
    public function createappAction()
    {
    $user_session = new Container('devId');
    $id = $user_session->offsetGet('devId');
    
    if($id != "")
    {
     $qr = $this->getcreateappTable()->selectUser($id);
 
       return new ViewModel(array(
            'result' => $qr,
            'devId'=>$id
        )); 
        }
        else
        {
         $this->redirect()->toRoute('application/default',array('controller'=>'sfpdeveloper','action'=>'index'));
                  
        }  
    }
    
    public function appidsaveAction()
    {
        

  
      $id  = $_POST['hids']; 
      
      $email = $_POST['email'];
      $appid = time();
      $data = array(
      'devId' => $id,
      'date' => date('y-m-d'),
      'email'=> $email,
      'appid' => $appid
      );
     
      $qr = $this->getcreateappTable()->saveUser($data);
       
       if($qr)
       {
        echo $appid;
       }
   
   
    exit; 
    }
    
    
    public function getAction()
    {
        
      return new ViewModel(array(
            'developers' => $this->getDeveloperTable()->fetchAll(),
        ));
                
    }
    
    public function editAction() //added by Poulami
    {
        $id = (int) $this->params()->fromRoute('id');
        //return array('developers'=> $this->getDeveloperTable()->getDeveloper($id));
        try{
            $developers = $this->getDeveloperTable()->getDeveloper($id); 
        }
        catch( \Exception $e)
        {
            return $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'get'));
        }
        
        $dForm   = new DForm();
        $dForm -> bind($developers);
        $dForm -> get('submit') -> setValue('UPDATE');
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            if($dForm->isValid())
            {
                $this->getDeveloperTable()->saveDeveloper($developer);
            }
        }
        
        return array('form'=> $dForm);
           
    }
    
    public function deleteAction() //edited by Poulami
    {
        $id = (int) $this->params()->fromRoute('id');
        $this->getDeveloperTable()->delDeveloper($id);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'get'));
        
    } 
    
    public function logoutAction() 
    {
        unset($_SESSION['devId']); 
        $this->redirect()->toRoute('application/default',array('controller'=>'developer'));
    }
         
    public function getDeveloperTable()
    {
        if (!$this->developerTable) {
         $sm = $this->getServiceLocator();
         $this->developerTable = $sm->get('Application\Model\DeveloperTable');
        }
        return $this->developerTable;
    }
    
    public function getTemplateTable()
    {
        if (!$this->templateTable) {
         $sm = $this->getServiceLocator();
         $this->templateTable = $sm->get('Application\Model\TemplateTable');
        }
        return $this->templateTable;
    }
    
      public function getcreateappTable()
    {
        if (!$this->createappTable) {
         $sm = $this->getServiceLocator();
         $this->createappTable = $sm->get('Application\Model\createappTable');
        }
        return $this->createappTable;
    }
    
}
?>